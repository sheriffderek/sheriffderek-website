(function(/*! Brunch !*/) {
  'use strict';

  var globals = typeof window !== 'undefined' ? window : global;
  if (typeof globals.require === 'function') return;

  var modules = {};
  var cache = {};

  var has = function(object, name) {
    return ({}).hasOwnProperty.call(object, name);
  };

  var expand = function(root, name) {
    var results = [], parts, part;
    if (/^\.\.?(\/|$)/.test(name)) {
      parts = [root, name].join('/').split('/');
    } else {
      parts = name.split('/');
    }
    for (var i = 0, length = parts.length; i < length; i++) {
      part = parts[i];
      if (part === '..') {
        results.pop();
      } else if (part !== '.' && part !== '') {
        results.push(part);
      }
    }
    return results.join('/');
  };

  var dirname = function(path) {
    return path.split('/').slice(0, -1).join('/');
  };

  var localRequire = function(path) {
    return function(name) {
      var dir = dirname(path);
      var absolute = expand(dir, name);
      return globals.require(absolute, path);
    };
  };

  var initModule = function(name, definition) {
    var module = {id: name, exports: {}};
    cache[name] = module;
    definition(module.exports, localRequire(name), module);
    return module.exports;
  };

  var require = function(name, loaderPath) {
    var path = expand(name, '.');
    if (loaderPath == null) loaderPath = '/';

    if (has(cache, path)) return cache[path].exports;
    if (has(modules, path)) return initModule(path, modules[path]);

    var dirIndex = expand(path, './index');
    if (has(cache, dirIndex)) return cache[dirIndex].exports;
    if (has(modules, dirIndex)) return initModule(dirIndex, modules[dirIndex]);

    throw new Error('Cannot find module "' + name + '" from '+ '"' + loaderPath + '"');
  };

  var define = function(bundle, fn) {
    if (typeof bundle === 'object') {
      for (var key in bundle) {
        if (has(bundle, key)) {
          modules[key] = bundle[key];
        }
      }
    } else {
      modules[bundle] = fn;
    }
  };

  var list = function() {
    var result = [];
    for (var item in modules) {
      if (has(modules, item)) {
        result.push(item);
      }
    }
    return result;
  };

  globals.require = require;
  globals.require.define = define;
  globals.require.register = define;
  globals.require.list = list;
  globals.require.brunch = true;
})();
(function() {

    $(document).ready( function() {


        $(function() {
            FastClick.attach(document.body);
        });

        console.log("v0.0.1");


        $(window).load( function() {
            setTimeout( function() {
                $('.cover').addClass('ready');
            }, 2000);

        });

        $('.google-results').addClass('current-view');

        var setView = function(element) {
            $(element).on('click', function() {
                var thisView = $(this).data('view');
                $('.js-view').removeClass('current-view');
                $('.' + thisView).addClass('current-view');
            });
        };

        setView('.view-trigger');


        var countdown = function(element, limit) {

            var characterLimit = limit;

            var inputLength = $(element).val().length;

            var currentCount = characterLimit - inputLength;

            var $thisDisplay = $(element).closest('.block').find('.count');
            var $thisNumber = $(element).closest('.block').find('.number');

            if ( currentCount < characterLimit ) {
                $thisNumber.text(currentCount);
            } else {
                $thisNumber.text(limit);
            }

            if ( currentCount < 15 ) {
                $thisDisplay.addClass('careful');
            } if ( currentCount < 5 ) {
                $thisDisplay.addClass('warning');
            } else if ( currentCount > 14 ) {
                $thisDisplay.removeClass('careful');
            } else if ( currentCount > 4 ) {
                $thisDisplay.removeClass('warning');
            }

        };

        // var currentMetaTitle;
        // var currentMetaDescription;


        var getTheContent = function(element, variable) {
            var variable = $(element).text();
        };



        $('textarea').on('keyup', function() {

            countdown('#title-input', 61);
            countdown('#description-input', 160);

        }).trigger('keyup');



        $('.submit').on('click', function() {

            var currentMetaTitle = $('#title-input').val();
            var currentMetaUrl = $('#url-input').val();
            var currentMetaDescription = $('#description-input').val();

            if ( currentMetaTitle.length < 1 || currentMetaDescription.length < 1 ) {

                alert("You have not filled out all of the information yet.");

                console.log("too-short");

            } else if ( currentMetaTitle.length > 61 || currentMetaDescription.length > 160 ) {

                alert("That's too long buddy! Trim it down a bit and try again.");
                console.log("too-long");

                return false;

            } else {

            	//alert("ahhhhh");
            	console.log("just right...");

                $(this).addClass('hold');

                $.ajax({
                    url: "http://formspree.io/info@sheriffderek.consulting",
                    method: "POST",
                    data: {
                        'Site title': currentMetaTitle,
                        'Site url': currentMetaUrl,
                        'Description': currentMetaDescription,
                    },
                    dataType: "json",
                    success: function() {
                        $(this).removeClass('hold');
                        $('.send-to-developer').fadeOut();
                        $('.fade-out').fadeOut( function() {
                            $('.fade-in').fadeIn();
                        });

                    },
                    error: function() {
                        alert('There was an error sending your form.');
	                }
                });

            }

        });


    });

})();




