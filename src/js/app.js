// SWIPER
import Swiper from 'swiper'
import { Navigation, EffectFade, Autoplay, Pagination } from 'swiper/modules'

// GSAP
import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"
import { SplitText } from "gsap/SplitText"
import { ScrollSmoother } from "gsap/ScrollSmoother"
import L from "leaflet";
import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';

const lightbox = new PhotoSwipeLightbox({
  gallery: '#c-gallery',
  children: 'a',
  pswpModule: () => import('photoswipe')
});

gsap.registerPlugin(ScrollTrigger, ScrollSmoother, SplitText)

const av_smooth_scroller_init = () => {
    ScrollSmoother.create({
        smooth: 1.6,   // seconds it takes to "catch up" to native scroll position
        effects: true, // look for data-speed and data-lag attributes on elements and animate accordingly
        ignoreMobileResize: false,
        smoothTouch: true
    });
}

window.requestAnimationFrame = (() => {
    return window.requestAnimationFrame ||
        function(callback) {
            window.setTimeout(callback, 1000 / 60);
        };
})();

//  CUSTOM JS


    // --- GLOBAL VARS ---------------------------- 

        // SCREENSIZE
        let w = window,
            d = document,
            e = d.documentElement,
            g = document.body,
            x = w.innerWidth || e.clientWidth || g.clientWidth,
            y = w.innerHeight|| e.clientHeight|| g.clientHeight;

        let isTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

        let top_display = 300;

    // END GLOBAL VARS -----------------------------




    // --- GLOBAL FUNCTIONS ---------------------------- 

    // AV CALL FN -- SHORTHAND
    window.av_call_fn = (selector, fn, args) => { if( document.querySelectorAll(selector).length>0 ) fn(args); }

    const debugger_tool = () =>{

        document.querySelector('.js-debugger-tool').addEventListener('click', () => {
            const debug = document.querySelector('.js-body')
            
            if(debug.classList.contains('is-debug')) return debug.classList.remove('is-debug')                
             
            debug.classList.add('is-debug')
        })

    }

    const av_remove_loader = () => {

        const jsLoader = document.querySelector('.js-loader')

        new gsap.timeline()
            // .addSpace("+=0.2")
            .to( null, {}, "+=0.2" )
                .call( () => {
                    debugger_tool();                    
                    av_start_funcs();
                })
            // .addSpace("+=0.2")
                .call( () => {
                    // scrollbar.scrollTo(0, 0, 200);
                })
            .addLabel('start') 
                .to(
                    jsLoader,
                    0.4,
                    {
                        opacity: 0,
                        ease: "power1.out"
                    },
                    'start'
                )
                .call( () => {
                    jsLoader.remove();                   
                })
            ;

    }

    // EXAMPLE: av_set_varcss('--my-var', my_value + 'px');
    const av_set_varcss = (property, value) => {

        let html = document.getElementsByTagName('html')[0];
        html.style.setProperty(property, value);

    }

    let all_slider = []

    const av_slider = () => {
        all_slider = []

        const getAllSliders = document.querySelectorAll('.js-slider')

        getAllSliders.forEach(item => {

            var current_selector    = item.querySelector('.js-swiper__swiper');           

            var swiper = new Swiper( current_selector , {    
                modules: [Navigation, Autoplay, EffectFade, Pagination],                            
                slidesPerView: 1,
                spaceBetween: 15,
                loop: true,
                centeredSlides: true,                                                                                                              
                effect: 'fade',   
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation:{
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                }                                                                                        
            });

            all_slider.push(swiper);

        });
    }

    const av_reset_vars_css = () => {
       
        let _html = document.getElementsByTagName('html')[0];
        let _col_1 = document.querySelectorAll('.js-col-1')[0].offsetWidth;
        let _col_1_inner = document.querySelector('.js-col-1-inner').innerWidth;
        let _header_height = document.querySelector('.js-header').innerHeight;

        _html.style.setProperty('--col-1', _col_1 + 'px');
        _html.style.setProperty('--col-1-inner', _col_1_inner + 'px');
        _html.style.setProperty('--header-height', Math.round(_header_height) + 'px');

        // ? https://css-tricks.com/the-trick-to-viewport-units-on-mobile/
        // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
        let vh = window.innerHeight * 0.01;
        // Then we set the value in the --vh custom property to the root of the document
        _html.style.setProperty('--vh', `${vh}px`);

    }

    const av_global_scroll = () => {

        let smoothScrollClass = false;
        // let smoothScrollClass = '.js-smooth-scroll'; // ! APPLY THE SMOOTH SCROLL ON WEBSITE

        let scroller = smoothScrollClass ? smoothScrollClass : window;
        let trigger = smoothScrollClass ? smoothScrollClass : 'body';

        ScrollTrigger.defaults({
            scroller: scroller
        });

        // GLOBAL SCROLL
        ScrollTrigger.create({
            trigger: trigger,
            start: "top top",
            onUpdate: (self) => {

                // ? https://codepen.io/theophileavoyne/pen/poNVyzE
                // ? https://greensock.com/forums/topic/26554-keep-positionprogress-of-scrub-animation-on-resize/

                let progressInPx = self.progress * ((self.end + y) - self.start);

                const jsHeaderNode = document.querySelector('.js-header')
                
                if ( (self.direction==1) && (progressInPx > top_display) ){
                    // downscroll code
                    jsHeaderNode.classList.add('has-transform');
                    jsHeaderNode.classList.add('is-alt');   
                } else {
                    // upscroll code
                    jsHeaderNode.classList.remove('has-transform');
                    if ( (progressInPx <= top_display) ){
                        jsHeaderNode.classList.remove('is-alt');
                    }
                }

            }
        });

        ScrollTrigger.batch(".js-anim-inview", {
            toggleClass: "is-inview",
            start: "top+=400px bottom",
            // end: () => "+=" + 50,
            // markers: true,
            once: true,
            id: "is-inview"
        });

        document.querySelectorAll('.c-animated-text').forEach((_e) => {
            const _elem = _e;
            const currentTextMovement = _elem.querySelector('.js-text-movement');
            let secondTextMovement = currentTextMovement.querySelector('.c-animated-text__title');
            let secondTextMovement2 = null;
        
            if (currentTextMovement.querySelector('.js-text-movement--invest')) {
                secondTextMovement = currentTextMovement.querySelector('.c-animated-text__title--1');
                secondTextMovement2 = currentTextMovement.querySelector('.c-animated-text__title--2');
            }
        
            gsap.fromTo(
                secondTextMovement,
                { x: '60%' },
                {
                    x: '28%',
                    ease: "Power0.easeNone",
                    scrollTrigger: {
                        markers: false,
                        trigger: secondTextMovement,
                        scrub: true,
                        end: () => `+=${600}`,
                    }
                }
            );
        
            if (secondTextMovement2) {
                gsap.fromTo(
                    secondTextMovement2,
                    { x: '30%' },
                    {
                        x: '38%',
                        ease: "Power0.easeNone",
                        scrollTrigger: {
                            markers: false,
                            trigger: secondTextMovement2,
                            scrub: true,
                            end: () => `+=${600}`,
                        }
                    }
                );
            }
        });

    }

    const av_gallery_image = () => {

        document.querySelectorAll('.js-gallery__wrapper-image').forEach(e => {
            e.addEventListener('click', i => {
                const imageBig = document.querySelector('.c-gallery__image-big')                
                if(imageBig){
                    imageBig.remove()
                }

                document.querySelector('.c-gallery__velo').classList.add('is-active')

                const currentSrc = i.target.src
                const parentDiv = document.querySelector('.js-gallery__velo-image')
                const imgElem = new Image()
                
                imgElem.src = currentSrc
                imgElem.classList.add('c-gallery__image-big')
                parentDiv.appendChild(imgElem)
            })

        })

    }

    const av_gallery_remove_image = () => {

        document.querySelector('.js-gallery__remove-image').addEventListener('click', () => {
            document.querySelector('.c-gallery__velo').classList.remove('is-active')
            const imageBig = document.querySelector('.c-gallery__image-big')
            if(imageBig){
                imageBig.remove()
            }
        })

    }

    const toggle_menu = () => {
        const menuDropdown = document.querySelector('body')
        const activeClass = 'is-dropdown-active'

        if(menuDropdown.classList.contains(activeClass)){
            menuDropdown.classList.remove(activeClass)
            return
        }
        menuDropdown.classList.add(activeClass)


    }

    const av_header_hamburguer = () => {

        const hamburguer = document.querySelector('.js-header__hamburguer')

        hamburguer.addEventListener('click', () =>{
            toggle_menu()
        })

    }

    const av_generic_velo_close = () => {

        const hamburguer = document.querySelector('.js-generic-velo')

        hamburguer.addEventListener('click', () =>{
            toggle_menu()
        })

    }

    const av_contact_hover_image = () => {

        const nodeClass = document.querySelectorAll('.js-c-contact__wrapper-image')

        nodeClass.forEach(e => {
            e.addEventListener("mouseover", () => {
                e.classList.add('is-hover')
            });
              
            e.addEventListener("mouseout", () => {
                e.classList.remove('is-hover')
            });
        })

    }

    const av_split_text_anim = () => {

        const nodeAnim = document.querySelectorAll('.js-split-text')

        nodeAnim.forEach(e => {
            ScrollTrigger.batch(e,{
                onEnter: () => {
                    var tl = gsap.timeline()

                    var mySplitText = new SplitText(e, {
                         type: "lines"
                    })                   
            
                    tl.from(mySplitText.lines, {
                        duration: .5,
                        y: 80,
                        ease: "power1.inOut",
                        stagger: 0.01,                                               
                    });
                },
                once: true
            })
        })

    }

    const av_image_anim = () => {

        ScrollTrigger.batch('.js-anim-image', {
            start: "top 75%",
            once: true,
            onEnter: (e) => {                
                gsap.fromTo(e, {
                    opacity: 0, 
                    scale: 1.2                                                                                          
                }, {                    
                    scale: 1,
                    opacity: 1,
                    duration: 0.6,
                    ease: "power1.inOut",
                });
            }
        })        

    }

    const av_open_contact = () => {

        const node = document.querySelectorAll('.js-open-contact')
        const contactToggle = document.querySelector('.b-contact')

        node.forEach(e => {
            e.addEventListener('click', () => {
                if(contactToggle.classList.contains('is-active')){
                    contactToggle.classList.remove('is-active')
                    return
                }
                contactToggle.classList.add('is-active')
            })
        })

    }

    const av_close_contact = () => {

        const node = document.querySelector('.js-b-contact__close')
        const contactToggle = document.querySelector('.b-contact')

        node.addEventListener('click', () => {

            if(!contactToggle.classList.contains('is-active')) return
    
            contactToggle.classList.remove('is-active')
        })


    }

    const av_footer_map = () => {
        const nodeMap = document.querySelector('#map')

        const coordinates = [41.78334547704238, 3.0361138546487214]

        if(!nodeMap) return

        var map = L.map('map').setView(coordinates, 17);

        var myIcon = L.icon({
            iconUrl: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAApCAYAAADAk4LOAAAFgUlEQVR4Aa1XA5BjWRTN2oW17d3YaZtr2962HUzbDNpjszW24mRt28p47v7zq/bXZtrp/lWnXr337j3nPCe85NcypgSFdugCpW5YoDAMRaIMqRi6aKq5E3YqDQO3qAwjVWrD8Ncq/RBpykd8oZUb/kaJutow8r1aP9II0WmLKLIsJyv1w/kqw9Ch2MYdB++12Onxee/QMwvf4/Dk/Lfp/i4nxTXtOoQ4pW5Aj7wpici1A9erdAN2OH64x8OSP9j3Ft3b7aWkTg/Fm91siTra0f9on5sQr9INejH6CUUUpavjFNq1B+Oadhxmnfa8RfEmN8VNAsQhPqF55xHkMzz3jSmChWU6f7/XZKNH+9+hBLOHYozuKQPxyMPUKkrX/K0uWnfFaJGS1QPRtZsOPtr3NsW0uyh6NNCOkU3Yz+bXbT3I8G3xE5EXLXtCXbbqwCO9zPQYPRTZ5vIDXD7U+w7rFDEoUUf7ibHIR4y6bLVPXrz8JVZEql13trxwue/uDivd3fkWRbS6/IA2bID4uk0UpF1N8qLlbBlXs4Ee7HLTfV1j54APvODnSfOWBqtKVvjgLKzF5YdEk5ewRkGlK0i33Eofffc7HT56jD7/6U+qH3Cx7SBLNntH5YIPvODnyfIXZYRVDPqgHtLs5ABHD3YzLuespb7t79FY34DjMwrVrcTuwlT55YMPvOBnRrJ4VXTdNnYug5ucHLBjEpt30701A3Ts+HEa73u6dT3FNWwflY86eMHPk+Yu+i6pzUpRrW7SNDg5JHR4KapmM5Wv2E8Tfcb1HoqqHMHU+uWDD7zg54mz5/2BSnizi9T1Dg4QQXLToGNCkb6tb1NU+QAlGr1++eADrzhn/u8Q2YZhQVlZ5+CAOtqfbhmaUCS1ezNFVm2imDbPmPng5wmz+gwh+oHDce0eUtQ6OGDIyR0uUhUsoO3vfDmmgOezH0mZN59x7MBi++WDL1g/eEiU3avlidO671bkLfwbw5XV2P8Pzo0ydy4t2/0eu33xYSOMOD8hTf4CrBtGMSoXfPLchX+J0ruSePw3LZeK0juPJbYzrhkH0io7B3k164hiGvawhOKMLkrQLyVpZg8rHFW7E2uHOL888IBPlNZ1FPzstSJM694fWr6RwpvcJK60+0HCILTBzZLFNdtAzJaohze60T8qBzyh5ZuOg5e7uwQppofEmf2++DYvmySqGBuKaicF1blQjhuHdvCIMvp8whTTfZzI7RldpwtSzL+F1+wkdZ2TBOW2gIF88PBTzD/gpeREAMEbxnJcaJHNHrpzji0gQCS6hdkEeYt9DF/2qPcEC8RM28Hwmr3sdNyht00byAut2k3gufWNtgtOEOFGUwcXWNDbdNbpgBGxEvKkOQsxivJx33iow0Vw5S6SVTrpVq11ysA2Rp7gTfPfktc6zhtXBBC+adRLshf6sG2RfHPZ5EAc4sVZ83yCN00Fk/4kggu40ZTvIEm5g24qtU4KjBrx/BTTH8ifVASAG7gKrnWxJDcU7x8X6Ecczhm3o6YicvsLXWfh3Ch1W0k8x0nXF+0fFxgt4phz8QvypiwCCFKMqXCnqXExjq10beH+UUA7+nG6mdG/Pu0f3LgFcGrl2s0kNNjpmoJ9o4B29CMO8dMT4Q5ox8uitF6fqsrJOr8qnwNbRzv6hSnG5wP+64C7h9lp30hKNtKdWjtdkbuPA19nJ7Tz3zR/ibgARbhb4AlhavcBebmTHcFl2fvYEnW0ox9xMxKBS8btJ+KiEbq9zA4RthQXDhPa0T9TEe69gWupwc6uBUphquXgf+/FrIjweHQS4/pduMe5ERUMHUd9xv8ZR98CxkS4F2n3EUrUZ10EYNw7BWm9x1GiPssi3GgiGRDKWRYZfXlON+dfNbM+GgIwYdwAAAAASUVORK5CYII=',
            iconSize: [24,36],
            iconAnchor: [12,36]
        })

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
        
        L.marker(coordinates, {icon: myIcon}).addTo(map)            
    }    

    // END GLOBAL FUNCTIONS ---------------------------- 

    const av_start_funcs = () => {

        av_reset_vars_css()

        av_call_fn('.js-gallery__wrapper-image', av_gallery_image)

        av_call_fn('.js-gallery__remove-image', av_gallery_remove_image)

        av_call_fn('.js-header__hamburguer', av_header_hamburguer)

        av_call_fn('.js-generic-velo', av_generic_velo_close)

        av_call_fn('.js-slider', av_slider)

        av_call_fn('.js-c-contact__wrapper-image', av_contact_hover_image)

        av_call_fn('.js-split-text', av_split_text_anim)

        av_call_fn('.js-anim-image', av_image_anim)

        av_call_fn('.js-open-contact', av_open_contact)

        av_call_fn('.js-b-contact__close', av_close_contact)

        av_call_fn('.js-footer-map', av_footer_map)

        av_global_scroll()

        av_smooth_scroller_init()

        // --- ON RESIZE WINDOW EVENT --------------------------------
        window.removeEventListener('resize', windowResize)
        const windowResize = window.addEventListener('resize', () => {

            w = window,
            d = document,
            e = d.documentElement,
            g = document.body,
            x = w.innerWidth || e.clientWidth || g.clientWidth,
            y = w.innerHeight|| e.clientHeight|| g.clientHeight;

        })
        // END ON RESIZE WINDOW EVENT --------------------------------


        // $(window).trigger('resize');
        // window.dispatchEvent(new Event('resize'));
        

        // --- ON SCROLL WINDOW EVENT --------------------------------
        // $(window).off('scroll');
        // $(window).on('scroll', av_scroll);
        // av_scroll();

        
        
        // END ON RESIZE WINDOW EVENT --------------------------------

    }

    // --- ON LOAD --------------------------------------
    document.addEventListener('DOMContentLoaded', () => {
        av_remove_loader()
        lightbox.init();
    })
    // END ON LOAD --------------------------------------

