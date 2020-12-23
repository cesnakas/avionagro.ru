document.addEventListener('DOMContentLoaded', () => {

    if(window['avion_main_feedback_loaded']) {
        return;
    }

    window['avion_main_feedback_loaded'] = true;

    const avionMainFeedback_result = (formElement, result) => {
        console.log(result);

        formElement.querySelectorAll('#feedback-form__title, .feedback-form__download, .feedback-form__subtitle, .feedback-form__file, button, .feedback-form__input-name').forEach(el => el.removeAttribute('style'))
        formElement.querySelector('#feedback-form__sending').setAttribute('style', 'display:none');

        if(result && result.success) {
            document.querySelector('#callback-result').classList.add('active');
            formElement.querySelector('input[type="file"]').dispatchEvent(new Event('recalc'));
        } else {
            alert(result.error || 'Произошла неизвестная ошибка, попробуйте позднее')
        }
    }

    const handlerFunction = event => {
        event.stopPropagation();
        event.preventDefault();

        switch (event.type) {
            case 'dragover':
                event.currentTarget.setAttribute('style', 'border-color:#62BB46');
                break;
            case 'dragleave':
                event.currentTarget.removeAttribute('style');
                break;
            case 'drop':
                event.currentTarget.removeAttribute('style');
                const fileInput = event.currentTarget.parentElement.querySelector('input[type="file"]');
                fileInput.addFiles(event.dataTransfer.files);
                break;
        }
    };

    document.querySelectorAll('.feedback-form__file').forEach(dropArea => {

        let fileCounter = 0;

        dropArea.buff = new ClipboardEvent("").clipboardData || new DataTransfer();

        const formElement = dropArea.parentElement;

        formElement.addEventListener('submit', async event => {
            event.stopPropagation();
            event.preventDefault();

            const formData = new FormData(event.currentTarget);

            try {
                event.currentTarget.querySelectorAll('.feedback-form__download, #feedback-form__title, .feedback-form__subtitle, .feedback-form__file, button, .feedback-form__input-name').forEach(el => el.setAttribute('style', 'display:none'))
                event.currentTarget.querySelector('#feedback-form__sending').removeAttribute('style');

                const response = await fetch(event.currentTarget.getAttribute('action'), {
                    method: 'POST',
                    body: formData
                });

                avionMainFeedback_result(formElement, await response.json())
            } catch (error) {
                avionMainFeedback_result(formElement, {error: 'Произошла неизвестная ошибка, попробуйте позднее', success: false});
            }
        })

        const fileInput = formElement.querySelector('input[type="file"]');

        fileInput.addFiles = function (files) {
            for (let i = 0, len = files.length; i < len; i++) {
                fileCounter++;
                files[i].id = fileCounter;
                dropArea.buff.items.add(files[i])
            }
            this.files = dropArea.buff.files;
            this.dispatchEvent(new Event('recalc'));
        }

        fileInput.removeFile = function (file_id) {
            for (let i = 0, len = dropArea.buff.items.length; i < len; i++) {
                if (file_id === dropArea.buff.items[i].id) {
                    dropArea.buff.items.remove(files[i])
                }
            }
            this.files = dropArea.buff.files;
            this.dispatchEvent(new Event('recalc'));
        }

        fileInput.addEventListener('change', function () {
            fileInput.addFiles(this.files);
        });

        fileInput.addEventListener('recalc', (event) => {

            [...event.currentTarget.files].forEach(file => {

                if (document.querySelector(`#uploadedFile${file.id}`)) {
                    return;
                }

                const error = file.type.search(/^image\/*/) === -1 ? 'Загрузить можно только фографии' : null;

                dropArea.insertAdjacentHTML('afterend', `
                    <div class="feedback-form__download ${error ? 'error' : 'finish'}">
                        <div class="feedback-form__download_content">
                            <div class="feedback-form__download_icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 1.5H13.5V3H6C5.60218 3 5.22064 3.15804 4.93934 3.43934C4.65804 3.72064 4.5 4.10218 4.5 4.5V19.5C4.5 19.8978 4.65804 20.2794 4.93934 20.5607C5.22064 20.842 5.60218 21 6 21H18C18.3978 21 18.7794 20.842 19.0607 20.5607C19.342 20.2794 19.5 19.8978 19.5 19.5V9H21V19.5C21 20.2956 20.6839 21.0587 20.1213 21.6213C19.5587 22.1839 18.7956 22.5 18 22.5H6C5.20435 22.5 4.44129 22.1839 3.87868 21.6213C3.31607 21.0587 3 20.2956 3 19.5V4.5C3 3.70435 3.31607 2.94129 3.87868 2.37868C4.44129 1.81607 5.20435 1.5 6 1.5Z"
                                          fill="currentColor"></path>
                                    <path d="M13.5 6.75V1.5L21 9H15.75C15.1533 9 14.581 8.76295 14.159 8.34099C13.7371 7.91903 13.5 7.34674 13.5 6.75Z"
                                          fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="feedback-form__download_loading">
                                <div class="feedback-form__download_filename">
                                    <div class="feedback-form__download_name">${file.name}</div>
                                    <div class="feedback-form__download_number">${error ? '0' : '100'}%</div>
                                </div>
                                <div class="feedback-form__download_line"></div>
                                <div class="feedback-form__download_error">${error}</div>
                            </div>
                        </div>
                        <button class="feedback-form__download_del" id="uploadedFile${file.id}"></button>
                    </div>`);

                document.querySelector(`#uploadedFile${file.id}`).addEventListener('click', event => {
                    event.stopPropagation();
                    event.preventDefault();
                    fileInput.removeFile(Number(event.currentTarget.id.replace('uploadedFile', '')))
                    event.currentTarget.parentElement.remove();
                });
            });

        }, false)

        dropArea.addEventListener('click', () => fileInput.click(), false)
        dropArea.addEventListener('dragenter', handlerFunction, false)
        dropArea.addEventListener('dragleave', handlerFunction, false)
        dropArea.addEventListener('dragover', handlerFunction, false)
        dropArea.addEventListener('drop', handlerFunction, false)
    });
})