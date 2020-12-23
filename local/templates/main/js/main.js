document.addEventListener('DOMContentLoaded', () => {

	document.querySelector('.header-mobile__burger').addEventListener('click', () => {
		document.querySelectorAll('.header-mobile__nav, .header-mobile__burger')
			.forEach(elem => elem.classList.toggle('active'));

		document.body.classList.toggle('block');
	})

	document.querySelector('.header-bot__navigation_btn').addEventListener('click', () => {
		const category = document.querySelector('.header-catalog');
		category.classList.toggle('active')
	})
	
	document.querySelectorAll('.header-mobile__list_btnNav, .header-bot__navigation_btn').forEach((elem) =>{
		elem.addEventListener('click', (event) => {
			const currentElem = event.currentTarget.parentElement;
			currentElem.classList.toggle('active')
		})
	})

	document.querySelectorAll('.button-callback').forEach((elem) => {
		elem.addEventListener('click', () => document.querySelector('#callback-form').classList.add('active'))
	})

	document.querySelectorAll('.callback-form__close').forEach((elem) => {
		elem.addEventListener('click', event => event.currentTarget.parentElement.parentElement.classList.remove('active'))
	})

	document.querySelectorAll('.basket_btn').forEach((elem) => {
		elem.addEventListener('click', (event) => {
			const currentElem = event.currentTarget;
			currentElem.classList.toggle('active')
		})
	})

	document.querySelectorAll('.header-bot__search_input').forEach(el => {
		el.addEventListener('focus', (event) => {
			const curentElem = event.currentTarget;
			curentElem.parentElement.classList.add('active');
		})
		el.addEventListener('blur', (event) => {
			const curentElem = event.currentTarget;
			if(!curentElem.value) {
				curentElem.parentElement.classList.remove('active');
			}
		})
	})
})

const swiperBannerAd = new Swiper ('.slider-banner-ad', {

	pagination: {
		el: '.banner-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.banner-button-next',
		prevEl: '.banner-button-prev',
	},
});

const swiperSliderSell = new Swiper ('.slider-banner-sell', {
	slidesPerView: 1.2,
	spaceBetween: 15,
	navigation: {
		nextEl: '.sell-button-next',
		prevEl: '.sell-button-prev',
	},
	pagination: {
		el: '.sell-pagination',
		clickable: true,
	},
	breakpoints: {
		576: {
			slidesPerView: 4,
		}
	}
});

const swiperSliderSection = new Swiper ('.slider-banner-section', {
	slidesPerView: 1.2,
	spaceBetween: 15,
	pagination: {
		el: '.section-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.section-button-next',
		prevEl: '.section-button-prev',
	},
	breakpoints: {
		576: {
			slidesPerView: 4,
		}
	}
});


const productImgSmall = new Swiper ('.banner-product__small', {
	slidesPerView: 4,
	watchOverflow: true,
	
});
const productImgBig = new Swiper ('.banner-product__big', {
	effect: "fade",
	thumbs: {
        swiper: productImgSmall,
	},
	pagination: {
		el: '.banner-product-pagination',
		clickable: true,
	},
});