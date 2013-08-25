(function(window) {
    var CW = {
        scrollContent: false,
        autoResizeContent: false,

		initBackground: function(options) {
		    var defaultOptions = {
                visible: true,
                defaultImage: '../img/bg-main-01.jpg',
                pathPrefix: '../',
                imageList: [
                    {src: '../img/bg-main-01.jpg'},
                    {src: '../img/sp-westend-01.jpg'},
                    {src: '../img/sp-westend-02.jpg'},
                    {src: '../img/sp-westend-03.jpg'}
                ],
                showArrowsOnLoad: true,
                hideArrowsTimeout: 5000,
                arrowWaitTimeout: 2000,
                randomize: true
            };

            for (var i in options) {
                defaultOptions[i] = options[i];
            }

            return CW.initBackgroundRotator(defaultOptions);
		},

		initPanel: function() {
            $('div#panel div.panelControls a').click(function() {
                var panelIcon = $(this);

                if (panelIcon.hasClass('open')) {
                    $('div#panel')
                        .addClass('nobackground');

                    $('div#panel div.panelControls')
                        .addClass('nomarginbottom');

                    $('div#panel div.panelContent')
                        .slideUp();

                    panelIcon
                        .removeClass('open')
                        .addClass('closed');
                }
                else {
                    $('div#panel')
                        .removeClass('nobackground');

                    $('div#panel div.panelControls')
                        .removeClass('nomarginbottom');

                    $('div#panel div.panelContent')
                        .slideDown();

                    panelIcon
                        .removeClass('closed')
                        .addClass('open');
                }


            });

            $('div#panel1 div.panelControls1 a').click(function() {
                var panelIcon = $(this);

                if (panelIcon.hasClass('open')) {
                    $('div#panel1')
                        .addClass('nobackground');

                    $('div#panel1 div.panelControls1')
                        .addClass('nomarginbottom');

                    $('div#panel1 div.panelContent1')
                        .slideUp();

                    panelIcon
                        .removeClass('open')
                        .addClass('closed');
                }
                else {
                    $('div#panel1')
                        .removeClass('nobackground');

                    $('div#panel1 div.panelControls1')
                        .removeClass('nomarginbottom');

                    $('div#panel1 div.panelContent1')
                        .slideDown();

                    panelIcon
                        .removeClass('closed')
                        .addClass('open');
                }

                
            });

            $('div#panel2 div.panelControls2 a').click(function() {
                var panelIcon = $(this);

                if (panelIcon.hasClass('open')) {
                    $('div#panel2')
                        .addClass('nobackground');

                    $('div#panel2 div.panelControls2')
                        .addClass('nomarginbottom');

                    $('div#panel2 div.panelContent2')
                        .slideUp();

                    panelIcon
                        .removeClass('open')
                        .addClass('closed');
                }
                else {
                    $('div#panel2')
                        .removeClass('nobackground');

                    $('div#panel2 div.panelControls2')
                        .removeClass('nomarginbottom');

                    $('div#panel2 div.panelContent2')
                        .slideDown();

                    panelIcon
                        .removeClass('closed')
                        .addClass('open');
                }

                
            });

            function setPanelHeight() {
                var topSpacing = 50;

                var windowHeight = $(window).height();
                var maxPanelHeight = $('#wrapper').height() - topSpacing;

                var t = windowHeight - parseInt($('#wrapper').css('bottom'), 10) - topSpacing;
                if (maxPanelHeight > t) {
                    maxPanelHeight = t;
                }

                var $copy = $('div#panel div.panelContent div.copy');

                var panelHeight = $('div#panel').height() + $('div#navMain').height();
                var contentHeight = $('div#panel div.panelContent').height();
                var panelSpacing = panelHeight - contentHeight;

                var copyHeight = $copy.height();
                if (!CW.originalCopyHeight) {
                    CW.originalCopyHeight = copyHeight;
                }

                var newHeight = copyHeight - (panelHeight - maxPanelHeight);

                if (newHeight < CW.originalCopyHeight) {
                    $copy.css({
                            'height': newHeight,
                            'overflow-y': 'auto',
                            'overflow-x': 'hidden'
                    });
                }

                if (CW.scrollContent) {
                    $copy.scrollbarPaper();
                }
            }

            if (CW.scrollContent) {
                // wrapper is required by scrollbarPaper
                $('div#panel div.panelContent div.copy')
                    .children()
                    .wrapAll('<span class="scroll-wrapper" />');
            }

            if (CW.autoResizeContent) {
                $(window).bind('resize', setPanelHeight);
                setPanelHeight();
            }
        },

        initCollections: function(productOptions, backgroundOptions, miscOptions) {
            miscOptions = miscOptions || {};

            var defaultBackgroundOptions = {
                pathPrefix: '../../',
                imageList: [],
                visible: false
            };

            var defaultProductOptions = {
                imageList: [
                    {
                        src: '../../img/covert-01-th.png',
                        detailSel: '#productDetail1',
                        thumbSel: '#thumb1',
                        contextShots: [
                            {src: '../../img/sp-bowen-01.jpg'},
                            {src: '../../img/sp-bowen-02.jpg'}
                        ]
                    },
                    {
                        src: '../../img/covert-02-th.png',
                        detailSel: '#productDetail2',
                        thumbSel: '#thumb2',
                        contextShots: [
                            {src: '../../img/sp-bowen-01.jpg'},
                            {src: '../../img/sp-bowen-02.jpg'}
                        ]
                    },
                    {
                        src: '../../img/covert-03-th.png',
                        detailSel: '#productDetail3',
                        thumbSel: '#thumb3',
                        contextShots: [
                            {src: '../../img/sp-westend-01.jpg'},
                            {src: '../../img/sp-westend-02.jpg'}
                        ]
                    },
                    {
                        src: '../../img/covert-01-th.png',
                        detailSel: '#productDetail4',
                        thumbSel: '#thumb4'
                    },
                    {
                        src: '../../img/covert-02-th.png',
                        detailSel: '#productDetail5',
                        thumbSel: '#thumb5'
                    },
                    {
                        src: '../../img/covert-03-th.png',
                        detailSel: '#productDetail6',
                        thumbSel: '#thumb6'
                    }
                ],
                slideDuration: 750,
                slideDistance: 533,
                imageSel: '#carouselImg',
                image2Sel: '#carouselImg2'
            };

            for (var i in productOptions) {
                defaultProductOptions[i] = productOptions[i];
            }
            var productRotator = new CW.ImageSlider(defaultProductOptions);

            for (var i in backgroundOptions) {
                defaultBackgroundOptions[i] = backgroundOptions[i];
            }
            var backgroundRotator = CW.initBackgroundRotator(defaultBackgroundOptions);

            function showProduct(idx, bNoSlide) {
                // details on the left
                $('#collectionsDetails .copy').hide();
                $('#collectionsDetails #product' + (idx + 1)).show();

                // set thumbnail active
                $('#collectionsGallery .thumbs a').removeClass('selected');
                $('#collectionsGallery .thumbs #thumb' + (idx + 1)).addClass('selected');

                // slide in the correct image from the right
                if (!bNoSlide) {
                    productRotator.slideImage('right', true, null, idx);
                }

                // update the background
                backgroundRotator.setImages(defaultProductOptions.imageList[idx].contextShots);
                return false;
            }

            function thumbClicked(e) {
                var id = $(e).attr('id');
                var idx = id.substr(id.length - 1, 1);
                showProduct(parseInt(idx, 10) - 1);
            }

            function shotClicked(productIdx, shotIdx) {
                $('.backdrop')
                    .css('z-index', '5')
                    .show();

                $('.backdrop, .overlay').click(function() {
                    $('.backdrop').hide();
                    $('.overlay').hide();

                    backgroundRotator.setInvisible();
                });

                backgroundRotator.setVisible();
                backgroundRotator.slideImage('left', true, function() {
                    $('.overlay')
                        .css({
                            top: ($(window).height() / 2) - 45,
                            left: ($(window).width() / 2) - 45
                        })
                        .show();
                }, shotIdx);
            }

			jQuery.fn.fullscreenr({width: 1242, height: 900, bgID: '#shotimg'});

            $('#collectionsGallery div.thumbs a').click(function(e) {
                thumbClicked(this);
                return false;
            });

            $('#carousel-left').click(function() {
                productRotator.slideImage('left', true, showProduct); return false;
            });

            $('#carousel-right').click(function() {
                productRotator.slideImage('right', true, showProduct); return false;
            });

            $('#collectionsDetails div.copy').each(function(i) {
                var productIdx = i;
                $(this).find('div.thumbs a').each(
                    function(productIdx) {
                        return function(j) {
                            $(this).click(function() {
                                shotClicked(productIdx, j);
                            });
                        };
                    }(productIdx)
                );
            });

            $('#collectionsDetails div.share a').click(function() {
                $(this).parent().find('ul').toggle('fade');
            });

            function centerVertically() {
                $('#collections').css('overflow', 'auto');

                var navMargin = 10;

                var collHeight = $('#collections').height();
                var collWidth = $('#collections').width();

                var navHeight = $('#navMain').height() + parseInt($('#wrapper').css('bottom'), 10);
                var windowHeight = $(window).height();

                var top = ((windowHeight - collHeight - navHeight) / 2);

                if (top + collHeight + (navMargin * 2) > windowHeight - navHeight) {
                    var chopTop = (top + collHeight + (navMargin * 2)) - (windowHeight - navHeight);
                    top -= chopTop;

                    $('#collections').css({
                            //'height': (windowHeight - navHeight - 20) + 'px'
                    });
                }

                $('#collections').css({
                        'position': 'absolute',
                        'z-index': '100',
                        'top': top + 'px',
                        'left': (($(window).width() - collWidth) / 2) + 'px'
                });
            }

            // center the thumbnails.
            function centerThumbs() {
                $('#collectionsContent div.thumbs a').wrapAll('<div id="thumbCenter" style="float: left" />');

                var thumbWidth = $('#thumbCenter').width();
                var leftMargin = ($('#collectionsContent div.thumbs').width() - thumbWidth) / 2;
                $('#thumbCenter').css('margin-left', leftMargin + 'px');
            }

            var defaultProduct = 0;

            $('#collectionsContent div.carousel')
                .show()
                .find('#carouselImg')
                    .show()
                    .attr('src', productOptions.imageList[defaultProduct].src);

            showProduct(defaultProduct, true);

            if (miscOptions.centerVertically) {
                centerVertically();
                $(window).bind('resize', centerVertically);
            }

            centerThumbs();
		},

        initPanelThumbs: function(options) {
            var defaultOptions = {
                imageList: [
                    {src: '../img/sp-bowen-01.jpg'},
                    {src: '../img/sp-bowen-02.jpg'},
                    {src: '../img/sp-westend-01.jpg'},
                    {src: '../img/sp-westend-02.jpg'}
                ],
                pathPrefix: '../',
                visible: false,
                slideCallback: function(i) {
                    thumbClicked(i, true);
                }
            };

            for (var i in options) {
                defaultOptions[i] = options[i];
            }

            var backgroundRotator = CW.initBackgroundRotator(defaultOptions);

            function thumbClicked(productIdx, skipSlide) {
                $('.panelContent .copy .thumbs a').removeClass('selected');
                $('.panelContent .copy .thumbs a#thumb' + (productIdx + 1)).addClass('selected');

                // update the background
                backgroundRotator.setVisible();
                if (!skipSlide) {
                    backgroundRotator.slideImage('right', true, null, productIdx);
                }
                else {
                    backgroundRotator.setImage(productIdx);
                }
            }

            $('div.panelContent div.copy div.thumbs a').each(function(i) {
                $(this).click(function() {
                        thumbClicked(i);
                });
            });

            thumbClicked(0, true);
		},

		isMobileWebkit: function() {
		    var ua = navigator.userAgent;
		    var keywords = ['Android', 'iPhone', 'iPod', 'iPad'];

		    for (var i = 0; i < keywords.length; i++) {
		        if (ua.indexOf(keywords[i]) >= 0) {
		            return true;
		        }
		    }
		},

		getDimensions: function() {
            return {
                width: $('.backdrop').width(),
                height: $('.backdrop').height() * 1.0
            };
        },

		initBackgroundRotator: function(options) {
		    options = options || {};
		    options.startIdx = null;

		    if (options.randomize) {
                options.startIdx = Math.floor(Math.random() * options.imageList.length);
                options.defaultImage = options.imageList[options.startIdx].src;
            }
            else {
                options.defaultImage = options.defaultImage || options.pathPrefix + 'images/backgrounds/blank.png';
            }

		    if (CW.isMobileWebkit()) {
		        return CW.initBackgroundRotator_MobileWebkit(options);
		    }
		    else {
		        return CW.initBackgroundRotator_Default(options);
		    }
		},

		initBackgroundRotator_MobileWebkit: function(options) {
		    options = options || {};

		    options.slideDuration = options.slideDuration || 750;
		    options.bgWidth = options.bgWidth || 1242;
		    options.bgHeight = options.bgHeight || 900;

		    var scrollingEnabled = options.imageList && options.imageList.length > 1;

		    $('.backdrop,#fs-region-left,#fs-arrow-left,#fs-region-right,#fs-arrow-right').remove();

		    $('<div class="backdrop" style="z-index: -2; overflow: hidden; width: 100%; height: 100%;"></div>')
		        .appendTo('body');

            // Left and right-side areas/click regions
            $('<div id="fs-hover-left" class="slide-hover"><img src="' + options.pathPrefix + 'images/backgrounds/blank.png" width="17" height="100%" /><div id="fs-left">&nbsp;</div></div>')
                .appendTo('#realBody');

            $('<div id="fs-hover-right" class="slide-hover"><img src="' + options.pathPrefix + 'images/backgrounds/blank.png" width="17" height="100%" /><div id="fs-right">&nbsp;</div></div>')
                .appendTo('#realBody');

            var backgroundRotator = new CW.MobileBackgroundRotator(options);

            if (scrollingEnabled) {
                var leftSlide = function(e) {
                    backgroundRotator.slideImage('left', true, options.slideCallback); return false;
                };

                $('#fs-hover-left,#fs-left')
                    .click(leftSlide)
                    .bind('touchstart', leftSlide);

                var rightSlide = function(e) {
                    backgroundRotator.slideImage('right', true, options.slideCallback); return false;
                };

                $('#fs-hover-right,#fs-right')
                    .click(rightSlide)
                    .bind('touchstart', rightSlide);

                // display on load
                if (options.showArrowsOnLoad) {
                    $('#fs-left,#fs-right').fadeIn();
                }
            }

		    return backgroundRotator;
		},

        initBackgroundRotator_Default: function(options) {
            options = options || {};

            options.pathPrefix = options.pathPrefix || '';
            options.slideDuration = options.slideDuration || 750;
            options.autoSlideInterval = options.autoSlideInterval || 0;
            options.arrowWaitTimeout = options.arrowWaitTimeout || 2000;
            options.imageSel = options.imageSel || '#bgimg';
            options.image2Sel = options.image2Sel || '#bgimg2';

            var scrollingEnabled = options.imageList && options.imageList.length > 1;

            $('.backdrop,#fs-hover-left,#fs-left,#fs-hover-right,#fs-right').remove();

            // Left and right-side areas/click regions
            $('<div id="fs-hover-left" class="slide-hover"><img src="' + options.pathPrefix + 'images/backgrounds/blank.png" width="17" height="100%" /><div id="fs-left">&nbsp;</div></div>')
                .appendTo('body');

            $('<div id="fs-hover-right" class="slide-hover"><img src="' + options.pathPrefix + 'images/backgrounds/blank.png" width="17" height="100%" /><div id="fs-right">&nbsp;</div></div>')
                .appendTo('body');

            // Background layers
            $('<div class="backdrop"><img id="bgimg" src="' + options.defaultImage + '" /></div>')
                .appendTo('body');

            $('<div class="backdrop"><img id="bgimg2" src="' + options.pathPrefix + 'images/backgrounds/blank.png" /></div>')
                .appendTo('body');

            jQuery.fn.fullscreenr({width: 1242, height: 900, bgID: options.imageSel});
			jQuery.fn.fullscreenr({width: 1242, height: 900, bgID: options.image2Sel});

            var backgroundRotator = new CW.ImageSlider(options);

            if (scrollingEnabled) {
                backgroundRotator.leftVisible = function() {
                    return $('#fs-left').css('display') != 'none';
                };

                backgroundRotator.rightVisible = function() {
                    return $('#fs-right').css('display') != 'none';
                };

                $('#fs-left').click(function(e) {
                    backgroundRotator.slideImage('left', true, options.slideCallback); return false;
                });

                $('#fs-right').click(function(e) {
                    backgroundRotator.slideImage('right', true, options.slideCallback); return false;
                });

                // display on load
                if (options.showArrowsOnLoad) {
                    $('#fs-left,#fs-right').fadeIn();
                }

                if (options.hideArrowsTimeout > 0) {
                    setTimeout(function() {
                        if (!backgroundRotator.rightTouched) {
                            $('#fs-right').fadeOut();
                        }

                        if (!backgroundRotator.leftTouched) {
                            $('#fs-left').fadeOut();
                        }
                    }, options.hideArrowsTimeout);
                }


                $('#fs-hover-left')
                    .mouseenter(function(e) {
                        if (!backgroundRotator.leftVisible()) {
                            $('#fs-left').fadeIn();
                        }
                        backgroundRotator.leftTouched = true;
                        backgroundRotator.overLeft = true;
                    })
                    .mouseleave(function(e) {
                        backgroundRotator.overLeft = false;
                        if (backgroundRotator.leftVisible()) {
                            clearTimeout(backgroundRotator.timerLeft);

                            backgroundRotator.timerLeft = setTimeout(function() {
                                if (!backgroundRotator.overLeft) {
                                    $('#fs-left').fadeOut();
                                }
                            }, options.arrowWaitTimeout);
                        }
                    });

                $('#fs-hover-right')
                    .mouseenter(function() {
                        if (!backgroundRotator.rightVisible()) {
                            $('#fs-right').fadeIn();
                        }

                        backgroundRotator.overRight = true;
                        backgroundRotator.rightTouched = true;
                    })
                    .mouseleave(function() {
                        backgroundRotator.overRight = false;
                        if (backgroundRotator.rightVisible()) {
                            clearTimeout(backgroundRotator.timerRight);

                            backgroundRotator.timerRight = setTimeout(function() {
                                if (!backgroundRotator.overRight) {
                                    $('#fs-right').fadeOut();
                                }
                            }, options.arrowWaitTimeout);
                        }
                    });
            }

            return backgroundRotator;
        },

        centerVertically: function(centerSel, options) {
            options = options || {};

            function _center(centerSel, options) {
                var containerSel = options.containerSel;

                var $center = $(centerSel);
                var $container = (containerSel) ? $(containerSel) : $(window);

                var containerTop = 0;
                if (containerSel) {
                    containerTop = $container.position().top;
                }

                var containerHeight = $container.height();

                if (options.bottomAnchorSel) {
                    var adjust = ($(window).height() - $(options.bottomAnchorSel).offset().top); // + $(options.bottomAnchorSel).
                    containerHeight -= adjust;
                }

                var centerHeight = $center.height();

                $center.css({
                    'top': containerTop + ((containerHeight - centerHeight) / 2),
                    'position': 'absolute',
                    'z-index': 100
                });
            }

            _center(centerSel, options);

            $(window).bind('resize', function() {
                _center(centerSel, options);
            });
        },

        centerHorizontally: function(centerSel, options) {
            options = options || {};

            function _center(centerSel, options) {
                var containerSel = options.containerSel;

                var $center = $(centerSel);
                var $container = (containerSel) ? $(containerSel) : $(window);

                var containerLeft = 0;
                if (containerSel) {
                    containerLeft = $container.position().left;
                }

                var containerWidth = $container.width();

                if (options.leftAnchorSel) {
                    var adjust = ($(window).width() - $(options.leftAnchorSel).offset().left); // + $(options.bottomAnchorSel).
                    containerWidth -= adjust; // - (options.bottomSpacing || 0);
                }

                var centerWidth = $center.width();

                var left = containerLeft + ((containerWidth - centerWidth) / 2);
                if (left < containerLeft) {
                    left = 0;
                }

                $center.css({
                    'left': left,
                    'position': 'absolute',
                    'z-index': 100
                });
            }

            _center(centerSel, options);

            $(window).bind('resize', function() {
                _center(centerSel, options);
            });
        },

        hitch: function(scope, method) {
            return function() {
                return method.apply(scope, arguments || []);
            };
        },

        preLoadImage: function(src) {
            var cacheImage = document.createElement('img');
            cacheImage.src = src;

            if (!CW.preloadCache) {
                CW.preloadCache = [];
            }

            CW.preloadCache.push(cacheImage);
        }
    };

    CW.ImageSlider = function(options) {
        this.backgroundSel = options.imageSel;
        this.background2Sel = options.image2Sel;

        this.init(options.imageList);

        this.slideDistance = options.slideDistance;
        this.slideDuration = options.slideDuration;

        this.autoSlideInterval = options.autoSlideInterval;

        if (options.startIdx != null) {  // using != rather than !== to include undefined
            this.currentBackgroundIdx = options.startIdx;
        }

        if (options.visible) {
            this.setVisible();
        }
        else {
            this.setInvisible();
        }

        if (this.autoSlideInterval > 0 && (options.imageList && options.imageList.length > 1)) {
            setInterval(CW.hitch(this, this.autoRotateImage), this.autoSlideInterval);
        }
    };

    CW.ImageSlider.prototype = {
        init: function(imageList) {
            this.currentBackgroundIdx = 0;
            this.stickBackground = false;
            this.backgroundSliding = false;

            this.activeBackgroundSel = this.backgroundSel;

            if (imageList) {
                this.imageList = imageList;
            }

            // preload the background images
            for (var i in this.imageList) {
                CW.preLoadImage(this.imageList[i].src);
            }

            $(window).bind('resize', CW.hitch(this, function() {
                var $activeBGContainer = $(this.activeBackgroundSel).parent();
                if ($activeBGContainer.data('clip-right') != 'auto') {
                    $activeBGContainer.css('clip', 'rect(auto ' + ($(window).width()) + 'px auto auto)');
                }
            }));
        },

        setVisible: function() {
            $(this.activeBackgroundSel).show();
            $('.slide-hover').show();
        },

        setInvisible: function() {
            $(this.activeBackgroundSel).hide();
            $(this.inactiveBackgroundSel).hide();

            $('.slide-hover').hide();
        },

        setImages: function(imageList) {
            this.init(imageList);
        },

        _slideImage: function (dir, src, duration, callback) {
            this.inactiveBackgroundSel = (this.activeBackgroundSel == this.backgroundSel) ? this.background2Sel : this.backgroundSel;
            if (this.backgroundSliding) {
                return;
            }

            this.backgroundSliding = true;

            var slideDistance = this.slideDistance || $(window).width();

            var j = this.currentBackgroundIdx;

            if (dir == 'left') {
                $(this.inactiveBackgroundSel)
                    .show()
                    .attr('src', src)
                    .parent()
                        .css({
                            'margin-left': -1 * slideDistance,
                            'z-index': -2
                        })
                        .animate({'margin-left': '0'}, {
                                duration: duration,
                                step: function(start, p) {
                                    $(p.elem)
                                        .css('clip', 'rect(auto auto auto ' + (-p.now) + 'px)')
                                        .data('clip-right', 'auto')
                                        .data('clip-left', -p.now);
                                }
                        });



                $(this.activeBackgroundSel)
                    .show()
                    .parent()
                        .css({
                            'margin-left': '0',
                            'z-index': -1
                        })
                        .animate({'margin-left': slideDistance}, {
                                duration: duration,
                                complete: CW.hitch(this, function() {
                                    if (callback) {
                                        callback(j);
                                    }
                                    this.backgroundSliding = false;
                                }),
                                step: function(cur, p) {
                                    $(p.elem)
                                        .css('clip', 'rect(auto ' + (p.end-p.now) + 'px auto auto)')
                                        .data('clip-right', (p.end-p.now))
                                        .data('clip-left', 'auto');
                                }
                        });
            }
            else {
                $(this.inactiveBackgroundSel)
                    .show()
                    .attr('src', src)
                    .parent()
                        .css({
                            'margin-left': slideDistance,
                            'z-index': -1
                        })
                        .animate({'margin-left': '0'}, {
                            duration: duration,
                            step: function(cur, p) {
                                $(p.elem)
                                    .css('clip', 'rect(auto ' + (Math.round(p.start - p.now)) + 'px auto auto)')
                                    .data('clip-right', (Math.round(p.start - p.now)))
                                    .data('clip-left', 'auto');
                            }
                        });

                $(this.activeBackgroundSel)
                    .show()
                    .parent()
                        .css({
                            'margin-left': '0',
                            'z-index': -2
                        })
                        .animate({'margin-left': -1 * slideDistance}, {
                            duration: duration,
                            complete: CW.hitch(this, function() {
                                if (callback) {
                                    callback(j);
                                }
                                this.backgroundSliding = false;
                            }),
                            step: function(cur, p) {
                                $(p.elem)
                                    .css('clip', 'rect(auto auto auto ' + (-p.now) + 'px)')
                                    .data('clip-right', 'auto')
                                    .data('clip-left', -p.now);

                            }
                        });
            }

            this.activeBackgroundSel = this.inactiveBackgroundSel;
        },

        setImage: function(specificIdx) {
            $(this.activeBackgroundSel)
                .show()
                .attr('src', this.imageList[specificIdx].src);
        },

        slideImage: function(dir, stick, callback, specificIdx) {
            if (specificIdx != null) {  // using != rather than !== to include undefined
                this.currentBackgroundIdx = specificIdx;
            }
            else if (this.imageList) {
                if (!dir || dir == 'left') {
                    this.currentBackgroundIdx -= 1;
                }
                else {
                    this.currentBackgroundIdx += 1;
                }

                if (this.currentBackgroundIdx == this.imageList.length) {
                    this.currentBackgroundIdx = 0;
                }

                if (this.currentBackgroundIdx == -1) {
                    this.currentBackgroundIdx = this.imageList.length - 1;
                }
            }

            if (this.imageList.length > 0) {
                this.stickBackground = stick || false;
                this._slideImage(dir, this.imageList[this.currentBackgroundIdx].src, this.slideDuration, callback);
            }
        },

        autoRotateImage: function(dir) {
            if (!this.stickBackground) {
                this.slideImage('left');
            }
        }
    };

    CW.MobileBackgroundRotator = function(options) {
        this.backgroundSel = options.imageSel || '#bgimg';
        this.background2Sel = options.image2Sel || '#bgimg2';

        // preload the background images
        for (var i in options.imageList) {
            CW.preLoadImage(options.imageList[i].src);
        }

        this.options = options;
        this.init(options.imageList);

        this.slideDuration = options.slideDuration;

        this.autoSlideInterval = options.autoSlideInterval;

        if (options.startIdx != null) {  // using != rather than !== to include undefined
            this.currentBackgroundIdx = options.startIdx;
        }

        if (options.visible) {
            this.setVisible();
        }
        else {
            this.setInvisible();
        }

        if (this.autoSlideInterval > 0 && (options.imageList && options.imageList.length > 1)) {
            setInterval(CW.hitch(this, this.autoRotateImage), this.autoSlideInterval);
        }
    };

    CW.MobileBackgroundRotator.prototype = {
        init: function(imageList) {
            this.currentBackgroundIdx = 0;
            this.currentOrientation = window.orientation;

            if (!this.activeBackgroundSel) {
                this.activeBackgroundSel = this.backgroundSel;
                this.inactiveBackgroundSel = this.background2Sel;
            }

            if (imageList) {
                this.imageList = imageList;
            }

            /*
            $('.backdrop').bind('touchstart', CW.hitch(this, this.detectSlide));
            $('.backdrop').bind('click', CW.hitch(this, this.detectSlide));
            */

            $(window).bind('orientationchange', CW.hitch(this, this.orientationChange));

            this.scaleBackground(this.options);
        },

        detectSlide: function(e) {
            if (this.imageList.length <= 1) {
                return;
            }

            var posX = e.clientX;
            if (e.originalEvent.touches) {
                if (e.originalEvent.touches.length != 1) {
                    return;
                }

                var touch = e.originalEvent.touches[0];
                var target = touch.target;

                posX = touch.clientX;
            }

            if (posX > ($(window).width() / 2)) {
                this.slideImage('right', null, this.options.slideCallback);
            }
            else {
                this.slideImage('left', null, this.options.slideCallback);
            }
        },

        // execd once on page load
        initBackground: function(options, targetWidth, targetHeight) {
            if ($('.bg-image').length == 0) {
                var browserWidth = CW.getDimensions().width;

                this.initBackgroundImage(this.backgroundSel.substring(1), options.defaultImage || 'about:blank', 0, targetWidth, targetHeight);
                this.initBackgroundImage(this.background2Sel.substring(1), 'about:blank', browserWidth, targetWidth, targetHeight);
            }
        },

        initBackgroundImage: function(imgID, imgSrc, left, width, height) {
            $bg = $('<img>')
                .attr({
                        id: imgID,
                        src: imgSrc
                })
                .addClass('bg-image')
                .css({
                        position: 'absolute',
                        top: '0px',
                        left: left + 'px',
                        width: width + 'px',
                        height: height + 'px'
                })
                .appendTo('.backdrop');

            return $bg;
        },

        scaleBackground: function(options) {
            var targetWidth = options.bgWidth || 1242;
            var targetHeight = options.bgHeight || 900;

            this.initBackground(options, targetWidth, targetHeight);

            var targetRatio = targetHeight / targetWidth;

            // Get browser window size
            var browserDimensions = CW.getDimensions();

            var browserWidth = browserDimensions.width;
            var browserHeight = browserDimensions.height;

            var browserRatio = (browserHeight / browserWidth);

            var bgHeight = browserHeight;
            var bgWidth = browserHeight / targetRatio;

            if (browserRatio < targetRatio) {
                bgHeight = browserWidth * targetRatio;
                bgWidth = browserWidth;
            }

            // hide inactive to prevent flashes
            if (this.inactiveBackgroundSel) {
                $(this.inactiveBackgroundSel)
                    .hide();
            }

            // clear any transforms on both containers

            // ensure active BG is displayed correctly
            if (this.activeBackgroundSel) {
                $(this.activeBackgroundSel).css({
                    '-webkit-transition': 'none',
                    '-webkit-transform': 'none',
                    'left': (browserWidth - bgWidth) / 2,
                    'z-index': -1
                })
                .data('TransformX', 0);
            }

            $('.bg-image').each(function(i, e) {
                $bg = $(this);

                $bg.css({
                       'width': bgWidth + 'px',
                       'height': bgHeight + 'px',
                        '-webkit-transition': 'none',
                        '-webkit-transform': 'none',
                        'top': (browserHeight - bgHeight) / 2
                    })
                   .data('TransformX', 0);
            });

            return this;
        },

        setVisible: function() {
            $('.backdrop').show();
        },

        setInvisible: function() {
            $('.backdrop').hide();
        },

        setImage: function(specificIdx) {
            if (specificIdx >= 0) {
                this.currentBackgroundIdx = specificIdx;
                var nextImgSrc = this.imageList[this.currentBackgroundIdx].src;

                $(this.activeBackgroundSel)
                    .attr('src', nextImgSrc);
            }
        },

        setImages: function(imageList) {
            this.init(imageList);
        },

        slideImage: function(dir, stick, callback, specificIdx) {
            if (this.sliding) {
                return;
            }

            if (specificIdx != null) {  // using != rather than !== to include undefined
                this.currentBackgroundIdx = specificIdx;
            }
            else if (this.imageList) {
                if (!dir || dir == 'left') {
                    this.currentBackgroundIdx -= 1;
                }
                else {
                    this.currentBackgroundIdx += 1;
                }

                if (this.currentBackgroundIdx == this.imageList.length) {
                    this.currentBackgroundIdx = 0;
                }

                if (this.currentBackgroundIdx == -1) {
                    this.currentBackgroundIdx = this.imageList.length - 1;
                }
            }

            var result = this.setupSlide(dir);
            this._slideImages(result, this.slideDuration, callback);
        },

        setupSlide: function(direction) {
            var nextImgSrc = this.imageList[this.currentBackgroundIdx].src;

            var browserWidth = CW.getDimensions().width;
            var backgroundWidth = $(this.activeBackgroundSel).width();

            // account for centering
            var targetDelta = ((backgroundWidth - browserWidth) / 2) + browserWidth;

            var activeBackgroundSel = this.activeBackgroundSel;
            var inactiveBackgroundSel = this.inactiveBackgroundSel;

            this.activeBackgroundSel = inactiveBackgroundSel;
            this.inactiveBackgroundSel = activeBackgroundSel;

            var activeStartPos = 0;
            if (direction == 'right') {
                inactiveStartPos = browserWidth;
                targetDelta *= -1;
            }
            else {
                inactiveStartPos = -1 * backgroundWidth;
            }

            // nothing special for inactive reset, because it's not visible
            $(inactiveBackgroundSel)
                .css({
                    '-webkit-transition': 'none',
                    '-webkit-transform': 'none',
                    'left': inactiveStartPos + 'px',
                    'z-index': -1
                })
                .data('TransformX', 0)
                .show();

            // for active reset, add the delta value to its transform and let the slide take care of it
            // don't reset, just set the new transform value

            $(activeBackgroundSel)
                .css({
                    'z-index': -2
                });

            // compute new position based on previous
            var activeTargetPos = $(activeBackgroundSel).data('TransformX') + targetDelta;
            $(activeBackgroundSel).data('TransformX', activeTargetPos);

            var inactiveTargetPos = $(inactiveBackgroundSel).data('TransformX') + targetDelta;
            $(inactiveBackgroundSel)
                .data('TransformX', inactiveTargetPos)
                .attr('src', nextImgSrc);

            return [
                {
                    imgSel: activeBackgroundSel,
                    targetPos: activeTargetPos
                },
                {
                    imgSel: inactiveBackgroundSel,
                    targetPos: inactiveTargetPos
                }
            ];
        },

        _slideImages: function(details, duration, callback) {
            if (this.sliding) {
                return;
            }

            this.sliding = true;

            for (var i = 0; i < details.length; i++) {
                var imgDetail = details[i];

                var imgSel = imgDetail.imgSel;
                var targetPos = imgDetail.targetPos;

                window.setTimeout(function(imgSel, targetPos, duration) {
                    return function() {
                        $(imgSel)
                            .css('-webkit-transition', '-webkit-transform ' + duration + 'ms ease-in-out')
                            .css('-webkit-transform', 'translate3d(' + targetPos + 'px, 0, 0)');
                    };
                }(imgSel, targetPos, duration), 0);
            }

            window.setTimeout(CW.hitch(this, function() {
                this.sliding = false;
            }), duration * 1.15);

            var j = this.currentBackgroundIdx;
            if (callback) {
                window.setTimeout(function() { callback(j); }, duration);
            }
        },

        orientationChange: function(e) {
            // 0 is vertical
            // 90 is home-button on right
            // -90 is home-button on left

            var lastOrientation = this.currentOrientation;
            this.currentOrientation = window.orientation;

            // if orientation changes 90 degrees, recompute the background dimensions
            if (Math.abs(lastOrientation - this.currentOrientation) == 90) {
                this.scaleBackground(this.options);
            }

            window.scrollTo(0, $(window).height());
        }
    };

    window.CW = CW;

    if (CW.isMobileWebkit()) {
        setTimeout(function() {
            window.scrollTo(0, $(window).height());
        }, 400);
    }
})(window);


//slightly hacky but functional. Twitter share does NOT like properly encoded emdashes and whatnot.
function urlencode(str) {
	return escape(str).replace(/%20/g, '+').replace(/\*/g, '%2A').replace(/\//g, '%2F').replace(/@/g, '%40').replace(/\+/g,'%20').replace(/\%u2014/g, '-');
}

function shareTwitter() {
	window.location = 'http://twitter.com/home?status='+urlencode(page.title+' '+page.link);
}

function shareFacebook() {
	window.location = 'http://www.facebook.com/share.php?u='+page.link;
}

function shareEmail() {
	window.location = 'mailto:?subject='+page.title+' at ChristianWoo.com&body=I thought you might like this link.%0A%0A '+page.link;
}