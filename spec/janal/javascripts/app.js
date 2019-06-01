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

  console.log('javaScript is hooked up.');

  // fastclick
  FastClick.attach(document.body);

})();


(function() {
// ======================


var appVar = angular.module('appName', []);

appVar.controller('JanaController', ['$scope', function($scope) {

  $scope.unit = 10; // one inch... ( 8ths ? ) I don't know...

  $scope.gearSize = {

    width:  {
      feet    : 3,
      inches  : 0
    },
    depth: {
      feet    : 2,
      inches  : 0
    },
    height: {
      feet    : 1,
      inches  : 0
    }

  };

  $scope.shellSizes = [
    { name: "1/4 inch", size: 0.25 },
    { name: "3/8 inch", size: 0.375 },
    { name: "1/2 inch", size: 0.5 },
    { name: "1 inch",   size: 1.0 },
    { name: "0", size: 0 }
  ];
  $scope.shellSizeSelect = $scope.shellSizes[0];

  $scope.shellWidth = $scope.shellSizeSelect;


  $scope.foamSizes = [
    { name: "1 inch", size: 1 },
    { name: "2 inch", size: 2 },
    { name: "3 inch", size: 3 },
    { name: "4 inch", size: 4 },
    { name: "0", size: 0 }
  ];
  $scope.foamSizeSelect = $scope.foamSizes[0];

  $scope.foamWidth = $scope.foamSizeSelect;


  var double = function(thing) {
    return thing * 2;
  };

  var convertToInches = function(thing) {
    return thing * 12;
  };


  $scope.gather = function() {

    $scope.gearWidth  = ( convertToInches($scope.gearSize.width.feet) + $scope.gearSize.width.inches) * $scope.unit;
    console.log( "gearWidth: " + $scope.gearWidth );

    $scope.gearDepth  = ( convertToInches($scope.gearSize.depth.feet) + $scope.gearSize.depth.inches) * $scope.unit;
    console.log( "gearDepth: " + $scope.gearDepth );

    $scope.gearHeight = ( convertToInches($scope.gearSize.height.feet) + $scope.gearSize.height.inches) * $scope.unit;
    console.log( "gearHeight: " + $scope.gearHeight );
    

    console.log( "Shell thickness: " + $scope.shellSizeSelect.size );
    $scope.shellWidth = $scope.shellSizeSelect.size * $scope.unit;
    
    console.log( "Foam thickness: " + $scope.foamSizeSelect.size );
    $scope.foamWidth  = $scope.foamSizeSelect.size * $scope.unit;

    $scope.shellAndFoamWidth = (double($scope.shellWidth) + double($scope.foamWidth));
    console.log("shell and foam: " + $scope.shellAndFoamWidth );

    $scope.totalWidth   = $scope.gearWidth  + $scope.shellAndFoamWidth;
    $scope.totalDepth   = $scope.gearDepth  + $scope.shellAndFoamWidth;
    $scope.totalHeight  = $scope.gearHeight + $scope.shellAndFoamWidth;

    console.log( $scope.totalWidth + "x" + $scope.totalDepth + "x" + $scope.totalHeight );


    $scope.leftNudge   = (($scope.gearWidth   - $scope.gearDepth)/2);
    $scope.topNudge    = (($scope.totalHeight  - $scope.totalDepth)/2);
    console.log("urg.... " + $scope.leftNudge  + " and " + $scope.topNudge);


  };

  $scope.gather();

  $(window).load( function() {
    $scope.gather();
    $('body').addClass('ready');
  });

}]);






$('.turn').on('click', function() {
  var thisView = $(this).data('view');
  $('#box').removeClass().addClass(thisView);
});

$('#toggle-backface').on('click', function() {
  $('#box div').toggleClass('solid');
});







// ======================  
})();


