"use strict";function scrollDirection(){var s=0;$(window).on("scroll",function(){var e=$(this).scrollTop();e<s?($("body").removeClass("hidden"),$("body").addClass("scrolledUp"),$("body").removeClass("scrolledDown")):($("body").removeClass("scrolledUp"),$("body").addClass("scrolledDown")),s=e})}function goToSection__scroll(e,s,a,o,n){var t=$(window).scrollTop(),l=$(e).offset().top;l<t?setTimeout(function(){$("html, body").animate({scrollTop:l-s},o)},n):setTimeout(function(){$("html, body").animate({scrollTop:l-a},o)},n)}function stickyPosition(e,s,a){var e=$(e),o=$(".l-nav");!o.hasClass("is-scrolled")||o.hasClass("is-hidden")?e.css("top",s):e.css("top",a)}var openSubMenu,closeSubMenuReference,navElement,navMobile,navHamburguer,navToggleSearch,closeAllNavElements,disableOverflow,enableOverflow,cSearch=$(".c-search"),cForm__attach=(cSearch.find("input").on("focusin",function(){$(this).closest("form").addClass("is-active")}),cSearch.find("input").on("focusout",function(){$(this).closest("form").removeClass("is-active")}),$(".c-form").on("submit",function(e){e.preventDefault(),$(this).find(".c-feedbackForm").length&&($(this).find(".c-form__hero").addClass("u-dnone").closest(".c-form").find(".c-form__fieldsHero").addClass("u-dnone"),$(this).closest(".c-form").find(".c-feedbackForm__status.--load").removeClass("u-dnone"),console.log("Fazer aqui a lógica para o sucesso do envio"),console.log("Fazer aqui a lógica para o erro do envio"))}),document.querySelectorAll(".c-form .js-field__attach")),cHamburguer=(cForm__attach.forEach(function(s){s.addEventListener("change",function(){var e=s.value.split("fakepath")[1];s.closest(".--file").querySelectorAll(".js-field__text")[0].value=e})}),document.querySelectorAll(".c-hamburguer")),removeGridClass=(cHamburguer.forEach(function(e){e.addEventListener("click",function(){e.classList.contains("is-blocked")||e.classList.toggle("is-active")})}),function(e){for(var s=1;s<=12;s++)e.classList.remove("--col"+s);e.classList.remove("--colNaN")}),initResponsiveGrids=function(){cResponsiveGrid.forEach(function(e,s){e.classList.add("js-responsiveGrid");var a={maxwBreaks:e.getAttribute("data-maxw-breaks").split(", ").map(Number),maxwCols:e.getAttribute("data-maxw-cols").split(", ").map(Number),initCols:parseInt(e.getAttribute("data-cols-init")),windowW:window.innerWidth},o=a.maxwBreaks.length;if(o===a.maxwCols.length)for(var n=0;n<=o;n++)a.maxwBreaks[n]>=a.windowW&&(removeGridClass(e),e.classList.add("--col"+a.maxwCols[n])),a.windowW>a.maxwBreaks[0]&&(removeGridClass(e),e.classList.add("--col"+a.initCols));else console.log("Erro na construção do grid responsivo")})},cResponsiveGrid=document.querySelectorAll(".c-responsiveGrid"),copyLinkInput=(window.addEventListener("load",initResponsiveGrids),window.addEventListener("resize",initResponsiveGrids),$(".js-shareOptions__input")),copyLinkBtn=$(".js-shareOptions__copyLink"),copyLinkFeedback=$(".js-shareOptions__feedback"),cSmartMenu=($(window).on("load",function(){copyLinkInput.val(window.location.href)}),copyLinkBtn.on("click",function(e){e.preventDefault(),copyLinkInput.select(),document.execCommand("copy"),copyLinkFeedback.addClass("is-active"),setTimeout(function(){copyLinkFeedback.removeClass("is-active")},3e3)}),document.querySelectorAll(".c-smartMenu")),activeClass="is-active";cSmartMenu&&(cSmartMenu.forEach(function(e){e.classList.add("js-smartMenu"),Array.from(e.children[0].children).forEach(function(e){e.classList.add("js-smartMenu__firstSub")}),document.querySelectorAll(".c-smartMenu li").forEach(function(e){e.children[1]&&(e.classList.add("js-smartMenu__li"),e.children[0].classList.add("js-smartMenu__toggle"),e.children[1].classList.add("js-smartMenu__subMenu"))})}),(openSubMenu=document.querySelectorAll(".js-smartMenu__toggle")).forEach(function(s){s.closest(".c-smartMenu").classList.contains("--click")?s.addEventListener("click",function(e){e.preventDefault(),s.classList.toggle(activeClass),s.parentElement.classList.toggle(activeClass),s.nextElementSibling.classList.toggle(activeClass)}):s.addEventListener("mouseenter",function(e){e.preventDefault(),s.classList.toggle(activeClass),s.parentElement.classList.toggle(activeClass),s.nextElementSibling.classList.toggle(activeClass)})}),(closeSubMenuReference=document.querySelectorAll(".js-smartMenu__firstSub")).forEach(function(e){e.parentElement.parentElement.classList.contains("--vertical")||e.addEventListener("mouseleave",function(){cSmartMenu.forEach(function(e){e.classList.remove(activeClass),e.querySelectorAll("*").forEach(function(e){e.classList.remove(activeClass)})})})})),$(".c-tab").length&&(console.log("aa"),$(".c-tab__options li").on("click",function(e){var s=$(this).children("span").attr("data-tab");$(".c-tab__options span").removeClass("is-active"),$('.c-tab__options span[data-tab="'+s+'"]').addClass("is-active"),$(".c-tab__hero__content").removeClass("is-active"),$('.c-tab__hero__content[data-tab="'+s+'"]').addClass("is-active"),goToSection__scroll(".c-tab",100,80,700,10)})),$(".l-nav").length&&(navElement=$(".l-nav"),navMobile=$(".l-navMobile"),navHamburguer=$(".l-nav .c-hamburguer"),navToggleSearch=$(".js-l-nav__toggleSearch"),closeAllNavElements=function(){$(".c-subMenu").removeClass("is-active"),navHamburguer.removeClass("is-active")},disableOverflow=function(){$("body").addClass("u-overflowBlocked")},enableOverflow=function(){$("body").removeClass("u-overflowBlocked")},$(".js-openNavMobile").on("click",function(){navMobile.addClass("is-active"),$(".js-closeNavMobile.c-hamburguer").addClass("is-active"),disableOverflow()}),$(".js-closeNavMobile").on("click",function(){navMobile.removeClass("is-active"),navHamburguer.removeClass("is-active"),enableOverflow()}),$(window).on("load",function(e){99<$(this).scrollTop()?navElement.addClass("is-scrolled"):navElement.removeClass("is-scrolled")}),$(window).on("scroll",function(){var e=$(this).scrollTop();99<e?navElement.addClass("is-scrolled"):navElement.removeClass("is-scrolled"),600<e?(navElement.addClass("is-hidden"),navElement.addClass("is-middle")):(navElement.removeClass("is-hidden"),navElement.removeClass("is-middle")),navElement.hasClass("is-hidden")&&closeAllNavElements(),navElement.scrollInit=e}),navToggleSearch.on("click",function(){navToggleSearch.toggleClass("is-active"),$(".l-nav__search").toggleClass("is-active")}));