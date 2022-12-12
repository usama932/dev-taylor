// modules are defined as an array
// [ module function, map of requires ]
//
// map of requires is short require name -> numeric require
//
// anything defined in a previous bundle is accessed via the
// orig method which is the require for previous bundles

(function (modules, entry, mainEntry, parcelRequireName, globalName) {
  /* eslint-disable no-undef */
  var globalObject =
    typeof globalThis !== 'undefined'
      ? globalThis
      : typeof self !== 'undefined'
      ? self
      : typeof window !== 'undefined'
      ? window
      : typeof global !== 'undefined'
      ? global
      : {};
  /* eslint-enable no-undef */

  // Save the require from previous bundle to this closure if any
  var previousRequire =
    typeof globalObject[parcelRequireName] === 'function' &&
    globalObject[parcelRequireName];

  var cache = previousRequire.cache || {};
  // Do not use `require` to prevent Webpack from trying to bundle this call
  var nodeRequire =
    typeof module !== 'undefined' &&
    typeof module.require === 'function' &&
    module.require.bind(module);

  function newRequire(name, jumped) {
    if (!cache[name]) {
      if (!modules[name]) {
        // if we cannot find the module within our internal map or
        // cache jump to the current global require ie. the last bundle
        // that was added to the page.
        var currentRequire =
          typeof globalObject[parcelRequireName] === 'function' &&
          globalObject[parcelRequireName];
        if (!jumped && currentRequire) {
          return currentRequire(name, true);
        }

        // If there are other bundles on this page the require from the
        // previous one is saved to 'previousRequire'. Repeat this as
        // many times as there are bundles until the module is found or
        // we exhaust the require chain.
        if (previousRequire) {
          return previousRequire(name, true);
        }

        // Try the node require function if it exists.
        if (nodeRequire && typeof name === 'string') {
          return nodeRequire(name);
        }

        var err = new Error("Cannot find module '" + name + "'");
        err.code = 'MODULE_NOT_FOUND';
        throw err;
      }

      localRequire.resolve = resolve;
      localRequire.cache = {};

      var module = (cache[name] = new newRequire.Module(name));

      modules[name][0].call(
        module.exports,
        localRequire,
        module,
        module.exports,
        this
      );
    }

    return cache[name].exports;

    function localRequire(x) {
      var res = localRequire.resolve(x);
      return res === false ? {} : newRequire(res);
    }

    function resolve(x) {
      var id = modules[name][1][x];
      return id != null ? id : x;
    }
  }

  function Module(moduleName) {
    this.id = moduleName;
    this.bundle = newRequire;
    this.exports = {};
  }

  newRequire.isParcelRequire = true;
  newRequire.Module = Module;
  newRequire.modules = modules;
  newRequire.cache = cache;
  newRequire.parent = previousRequire;
  newRequire.register = function (id, exports) {
    modules[id] = [
      function (require, module) {
        module.exports = exports;
      },
      {},
    ];
  };

  Object.defineProperty(newRequire, 'root', {
    get: function () {
      return globalObject[parcelRequireName];
    },
  });

  globalObject[parcelRequireName] = newRequire;

  for (var i = 0; i < entry.length; i++) {
    newRequire(entry[i]);
  }

  if (mainEntry) {
    // Expose entry point to Node, AMD or browser globals
    // Based on https://github.com/ForbesLindesay/umd/blob/master/template.js
    var mainExports = newRequire(mainEntry);

    // CommonJS
    if (typeof exports === 'object' && typeof module !== 'undefined') {
      module.exports = mainExports;

      // RequireJS
    } else if (typeof define === 'function' && define.amd) {
      define(function () {
        return mainExports;
      });

      // <script>
    } else if (globalName) {
      this[globalName] = mainExports;
    }
  }
})({"6049Q":[function(require,module,exports) {
"use strict";
var global = arguments[3];
var HMR_HOST = null;
var HMR_PORT = null;
var HMR_SECURE = false;
var HMR_ENV_HASH = "d6ea1d42532a7575";
module.bundle.HMR_BUNDLE_ID = "0f59cdef3976b811";
/* global HMR_HOST, HMR_PORT, HMR_ENV_HASH, HMR_SECURE, chrome, browser, globalThis, __parcel__import__, __parcel__importScripts__, ServiceWorkerGlobalScope */ /*::
import type {
  HMRAsset,
  HMRMessage,
} from '@parcel/reporter-dev-server/src/HMRServer.js';
interface ParcelRequire {
  (string): mixed;
  cache: {|[string]: ParcelModule|};
  hotData: mixed;
  Module: any;
  parent: ?ParcelRequire;
  isParcelRequire: true;
  modules: {|[string]: [Function, {|[string]: string|}]|};
  HMR_BUNDLE_ID: string;
  root: ParcelRequire;
}
interface ParcelModule {
  hot: {|
    data: mixed,
    accept(cb: (Function) => void): void,
    dispose(cb: (mixed) => void): void,
    // accept(deps: Array<string> | string, cb: (Function) => void): void,
    // decline(): void,
    _acceptCallbacks: Array<(Function) => void>,
    _disposeCallbacks: Array<(mixed) => void>,
  |};
}
interface ExtensionContext {
  runtime: {|
    reload(): void,
    getURL(url: string): string;
    getManifest(): {manifest_version: number, ...};
  |};
}
declare var module: {bundle: ParcelRequire, ...};
declare var HMR_HOST: string;
declare var HMR_PORT: string;
declare var HMR_ENV_HASH: string;
declare var HMR_SECURE: boolean;
declare var chrome: ExtensionContext;
declare var browser: ExtensionContext;
declare var __parcel__import__: (string) => Promise<void>;
declare var __parcel__importScripts__: (string) => Promise<void>;
declare var globalThis: typeof self;
declare var ServiceWorkerGlobalScope: Object;
*/ var OVERLAY_ID = "__parcel__error__overlay__";
var OldModule = module.bundle.Module;
function Module(moduleName) {
    OldModule.call(this, moduleName);
    this.hot = {
        data: module.bundle.hotData,
        _acceptCallbacks: [],
        _disposeCallbacks: [],
        accept: function(fn) {
            this._acceptCallbacks.push(fn || function() {});
        },
        dispose: function(fn) {
            this._disposeCallbacks.push(fn);
        }
    };
    module.bundle.hotData = undefined;
}
module.bundle.Module = Module;
var checkedAssets, acceptedAssets, assetsToAccept /*: Array<[ParcelRequire, string]> */ ;
function getHostname() {
    return HMR_HOST || (location.protocol.indexOf("http") === 0 ? location.hostname : "localhost");
}
function getPort() {
    return HMR_PORT || location.port;
} // eslint-disable-next-line no-redeclare
var parent = module.bundle.parent;
if ((!parent || !parent.isParcelRequire) && typeof WebSocket !== "undefined") {
    var hostname = getHostname();
    var port = getPort();
    var protocol = HMR_SECURE || location.protocol == "https:" && !/localhost|127.0.0.1|0.0.0.0/.test(hostname) ? "wss" : "ws";
    var ws = new WebSocket(protocol + "://" + hostname + (port ? ":" + port : "") + "/"); // Web extension context
    var extCtx = typeof chrome === "undefined" ? typeof browser === "undefined" ? null : browser : chrome; // Safari doesn't support sourceURL in error stacks.
    // eval may also be disabled via CSP, so do a quick check.
    var supportsSourceURL = false;
    try {
        (0, eval)('throw new Error("test"); //# sourceURL=test.js');
    } catch (err) {
        supportsSourceURL = err.stack.includes("test.js");
    } // $FlowFixMe
    ws.onmessage = async function(event) {
        checkedAssets = {} /*: {|[string]: boolean|} */ ;
        acceptedAssets = {} /*: {|[string]: boolean|} */ ;
        assetsToAccept = [];
        var data = JSON.parse(event.data);
        if (data.type === "update") {
            // Remove error overlay if there is one
            if (typeof document !== "undefined") removeErrorOverlay();
            let assets = data.assets.filter((asset)=>asset.envHash === HMR_ENV_HASH); // Handle HMR Update
            let handled = assets.every((asset)=>{
                return asset.type === "css" || asset.type === "js" && hmrAcceptCheck(module.bundle.root, asset.id, asset.depsByBundle);
            });
            if (handled) {
                console.clear(); // Dispatch custom event so other runtimes (e.g React Refresh) are aware.
                if (typeof window !== "undefined" && typeof CustomEvent !== "undefined") window.dispatchEvent(new CustomEvent("parcelhmraccept"));
                await hmrApplyUpdates(assets);
                for(var i = 0; i < assetsToAccept.length; i++){
                    var id = assetsToAccept[i][1];
                    if (!acceptedAssets[id]) hmrAcceptRun(assetsToAccept[i][0], id);
                }
            } else fullReload();
        }
        if (data.type === "error") {
            // Log parcel errors to console
            for (let ansiDiagnostic of data.diagnostics.ansi){
                let stack = ansiDiagnostic.codeframe ? ansiDiagnostic.codeframe : ansiDiagnostic.stack;
                console.error("\uD83D\uDEA8 [parcel]: " + ansiDiagnostic.message + "\n" + stack + "\n\n" + ansiDiagnostic.hints.join("\n"));
            }
            if (typeof document !== "undefined") {
                // Render the fancy html overlay
                removeErrorOverlay();
                var overlay = createErrorOverlay(data.diagnostics.html); // $FlowFixMe
                document.body.appendChild(overlay);
            }
        }
    };
    ws.onerror = function(e) {
        console.error(e.message);
    };
    ws.onclose = function() {
        console.warn("[parcel] \uD83D\uDEA8 Connection to the HMR server was lost");
    };
}
function removeErrorOverlay() {
    var overlay = document.getElementById(OVERLAY_ID);
    if (overlay) {
        overlay.remove();
        console.log("[parcel] ✨ Error resolved");
    }
}
function createErrorOverlay(diagnostics) {
    var overlay = document.createElement("div");
    overlay.id = OVERLAY_ID;
    let errorHTML = '<div style="background: black; opacity: 0.85; font-size: 16px; color: white; position: fixed; height: 100%; width: 100%; top: 0px; left: 0px; padding: 30px; font-family: Menlo, Consolas, monospace; z-index: 9999;">';
    for (let diagnostic of diagnostics){
        let stack = diagnostic.frames.length ? diagnostic.frames.reduce((p, frame)=>{
            return `${p}
<a href="/__parcel_launch_editor?file=${encodeURIComponent(frame.location)}" style="text-decoration: underline; color: #888" onclick="fetch(this.href); return false">${frame.location}</a>
${frame.code}`;
        }, "") : diagnostic.stack;
        errorHTML += `
      <div>
        <div style="font-size: 18px; font-weight: bold; margin-top: 20px;">
          🚨 ${diagnostic.message}
        </div>
        <pre>${stack}</pre>
        <div>
          ${diagnostic.hints.map((hint)=>"<div>\uD83D\uDCA1 " + hint + "</div>").join("")}
        </div>
        ${diagnostic.documentation ? `<div>📝 <a style="color: violet" href="${diagnostic.documentation}" target="_blank">Learn more</a></div>` : ""}
      </div>
    `;
    }
    errorHTML += "</div>";
    overlay.innerHTML = errorHTML;
    return overlay;
}
function fullReload() {
    if ("reload" in location) location.reload();
    else if (extCtx && extCtx.runtime && extCtx.runtime.reload) extCtx.runtime.reload();
}
function getParents(bundle, id) /*: Array<[ParcelRequire, string]> */ {
    var modules = bundle.modules;
    if (!modules) return [];
    var parents = [];
    var k, d, dep;
    for(k in modules)for(d in modules[k][1]){
        dep = modules[k][1][d];
        if (dep === id || Array.isArray(dep) && dep[dep.length - 1] === id) parents.push([
            bundle,
            k
        ]);
    }
    if (bundle.parent) parents = parents.concat(getParents(bundle.parent, id));
    return parents;
}
function updateLink(link) {
    var newLink = link.cloneNode();
    newLink.onload = function() {
        if (link.parentNode !== null) // $FlowFixMe
        link.parentNode.removeChild(link);
    };
    newLink.setAttribute("href", link.getAttribute("href").split("?")[0] + "?" + Date.now()); // $FlowFixMe
    link.parentNode.insertBefore(newLink, link.nextSibling);
}
var cssTimeout = null;
function reloadCSS() {
    if (cssTimeout) return;
    cssTimeout = setTimeout(function() {
        var links = document.querySelectorAll('link[rel="stylesheet"]');
        for(var i = 0; i < links.length; i++){
            // $FlowFixMe[incompatible-type]
            var href = links[i].getAttribute("href");
            var hostname = getHostname();
            var servedFromHMRServer = hostname === "localhost" ? new RegExp("^(https?:\\/\\/(0.0.0.0|127.0.0.1)|localhost):" + getPort()).test(href) : href.indexOf(hostname + ":" + getPort());
            var absolute = /^https?:\/\//i.test(href) && href.indexOf(location.origin) !== 0 && !servedFromHMRServer;
            if (!absolute) updateLink(links[i]);
        }
        cssTimeout = null;
    }, 50);
}
function hmrDownload(asset) {
    if (asset.type === "js") {
        if (typeof document !== "undefined") {
            let script = document.createElement("script");
            script.src = asset.url + "?t=" + Date.now();
            if (asset.outputFormat === "esmodule") script.type = "module";
            return new Promise((resolve, reject)=>{
                var _document$head;
                script.onload = ()=>resolve(script);
                script.onerror = reject;
                (_document$head = document.head) === null || _document$head === void 0 || _document$head.appendChild(script);
            });
        } else if (typeof importScripts === "function") {
            // Worker scripts
            if (asset.outputFormat === "esmodule") return import(asset.url + "?t=" + Date.now());
            else return new Promise((resolve, reject)=>{
                try {
                    importScripts(asset.url + "?t=" + Date.now());
                    resolve();
                } catch (err) {
                    reject(err);
                }
            });
        }
    }
}
async function hmrApplyUpdates(assets) {
    global.parcelHotUpdate = Object.create(null);
    let scriptsToRemove;
    try {
        // If sourceURL comments aren't supported in eval, we need to load
        // the update from the dev server over HTTP so that stack traces
        // are correct in errors/logs. This is much slower than eval, so
        // we only do it if needed (currently just Safari).
        // https://bugs.webkit.org/show_bug.cgi?id=137297
        // This path is also taken if a CSP disallows eval.
        if (!supportsSourceURL) {
            let promises = assets.map((asset)=>{
                var _hmrDownload;
                return (_hmrDownload = hmrDownload(asset)) === null || _hmrDownload === void 0 ? void 0 : _hmrDownload.catch((err)=>{
                    // Web extension bugfix for Chromium
                    // https://bugs.chromium.org/p/chromium/issues/detail?id=1255412#c12
                    if (extCtx && extCtx.runtime && extCtx.runtime.getManifest().manifest_version == 3) {
                        if (typeof ServiceWorkerGlobalScope != "undefined" && global instanceof ServiceWorkerGlobalScope) {
                            extCtx.runtime.reload();
                            return;
                        }
                        asset.url = extCtx.runtime.getURL("/__parcel_hmr_proxy__?url=" + encodeURIComponent(asset.url + "?t=" + Date.now()));
                        return hmrDownload(asset);
                    }
                    throw err;
                });
            });
            scriptsToRemove = await Promise.all(promises);
        }
        assets.forEach(function(asset) {
            hmrApply(module.bundle.root, asset);
        });
    } finally{
        delete global.parcelHotUpdate;
        if (scriptsToRemove) scriptsToRemove.forEach((script)=>{
            if (script) {
                var _document$head2;
                (_document$head2 = document.head) === null || _document$head2 === void 0 || _document$head2.removeChild(script);
            }
        });
    }
}
function hmrApply(bundle, asset) {
    var modules = bundle.modules;
    if (!modules) return;
    if (asset.type === "css") reloadCSS();
    else if (asset.type === "js") {
        let deps = asset.depsByBundle[bundle.HMR_BUNDLE_ID];
        if (deps) {
            if (modules[asset.id]) {
                // Remove dependencies that are removed and will become orphaned.
                // This is necessary so that if the asset is added back again, the cache is gone, and we prevent a full page reload.
                let oldDeps = modules[asset.id][1];
                for(let dep in oldDeps)if (!deps[dep] || deps[dep] !== oldDeps[dep]) {
                    let id = oldDeps[dep];
                    let parents = getParents(module.bundle.root, id);
                    if (parents.length === 1) hmrDelete(module.bundle.root, id);
                }
            }
            if (supportsSourceURL) // Global eval. We would use `new Function` here but browser
            // support for source maps is better with eval.
            (0, eval)(asset.output);
             // $FlowFixMe
            let fn = global.parcelHotUpdate[asset.id];
            modules[asset.id] = [
                fn,
                deps
            ];
        } else if (bundle.parent) hmrApply(bundle.parent, asset);
    }
}
function hmrDelete(bundle, id) {
    let modules = bundle.modules;
    if (!modules) return;
    if (modules[id]) {
        // Collect dependencies that will become orphaned when this module is deleted.
        let deps = modules[id][1];
        let orphans = [];
        for(let dep in deps){
            let parents = getParents(module.bundle.root, deps[dep]);
            if (parents.length === 1) orphans.push(deps[dep]);
        } // Delete the module. This must be done before deleting dependencies in case of circular dependencies.
        delete modules[id];
        delete bundle.cache[id]; // Now delete the orphans.
        orphans.forEach((id)=>{
            hmrDelete(module.bundle.root, id);
        });
    } else if (bundle.parent) hmrDelete(bundle.parent, id);
}
function hmrAcceptCheck(bundle, id, depsByBundle) {
    if (hmrAcceptCheckOne(bundle, id, depsByBundle)) return true;
     // Traverse parents breadth first. All possible ancestries must accept the HMR update, or we'll reload.
    let parents = getParents(module.bundle.root, id);
    let accepted = false;
    while(parents.length > 0){
        let v = parents.shift();
        let a = hmrAcceptCheckOne(v[0], v[1], null);
        if (a) // If this parent accepts, stop traversing upward, but still consider siblings.
        accepted = true;
        else {
            // Otherwise, queue the parents in the next level upward.
            let p = getParents(module.bundle.root, v[1]);
            if (p.length === 0) {
                // If there are no parents, then we've reached an entry without accepting. Reload.
                accepted = false;
                break;
            }
            parents.push(...p);
        }
    }
    return accepted;
}
function hmrAcceptCheckOne(bundle, id, depsByBundle) {
    var modules = bundle.modules;
    if (!modules) return;
    if (depsByBundle && !depsByBundle[bundle.HMR_BUNDLE_ID]) {
        // If we reached the root bundle without finding where the asset should go,
        // there's nothing to do. Mark as "accepted" so we don't reload the page.
        if (!bundle.parent) return true;
        return hmrAcceptCheck(bundle.parent, id, depsByBundle);
    }
    if (checkedAssets[id]) return true;
    checkedAssets[id] = true;
    var cached = bundle.cache[id];
    assetsToAccept.push([
        bundle,
        id
    ]);
    if (!cached || cached.hot && cached.hot._acceptCallbacks.length) return true;
}
function hmrAcceptRun(bundle, id) {
    var cached = bundle.cache[id];
    bundle.hotData = {};
    if (cached && cached.hot) cached.hot.data = bundle.hotData;
    if (cached && cached.hot && cached.hot._disposeCallbacks.length) cached.hot._disposeCallbacks.forEach(function(cb) {
        cb(bundle.hotData);
    });
    delete bundle.cache[id];
    bundle(id);
    cached = bundle.cache[id];
    if (cached && cached.hot && cached.hot._acceptCallbacks.length) cached.hot._acceptCallbacks.forEach(function(cb) {
        var assetsToAlsoAccept = cb(function() {
            return getParents(module.bundle.root, id);
        });
        if (assetsToAlsoAccept && assetsToAccept.length) // $FlowFixMe[method-unbinding]
        assetsToAccept.push.apply(assetsToAccept, assetsToAlsoAccept);
    });
    acceptedAssets[id] = true;
}

},{}],"2Zat1":[function(require,module,exports) {
// $( window ).load(function() {
// $(window).on('load', function(){ 
$(document).ready(function() {
    setTimeout(function() {
        const images = document.querySelectorAll(".image-1");
        const image_texts = document.querySelectorAll(".text_img");
        // Here is where the z-index is being set
        // from greatest to least
        images.forEach(function(e, i) {
            e.style.zIndex = images.length + 1 - i;
        });
        // image_texts.forEach( function(e,i){
        //     e.style.zIndex = image_texts.length+1-i;
        //     e.style.opacity = 0;
        //   });
        let imagesAnim = new TimelineMax();
        let imagesAnimText = new TimelineMax();
        imagesAnim.to(images[0], 2.5, {
            scale: 1,
            y: -20
        }).to(images[0], 0.4, {
            autoAlpha: 0
        }, "-=1").to(images[1], 2, {
            scale: 1,
            y: -20
        }, "-=1").to(images[1], 0.4, {
            autoAlpha: 0
        }, "-=1").to(images[2], 2, {
            scale: 1,
            y: -20
        }, "-=1").from("#progress-bar span", imagesAnim.duration(), {
            scaleX: 0,
            transformOrigin: "left",
            ease: Linear.easeNone
        }, 0);
        imagesAnimText.to(image_texts[0], 1.7, {
            autoAlpha: 1,
            y: 0
        }).to(image_texts[0], 1.2, {
            autoAlpha: 0,
            y: -40
        }, "-=1").to(image_texts[1], 0.2, {
            autoAlpha: 1,
            y: 0
        }, "-=1").to(image_texts[1], 0.5, {
            autoAlpha: 0,
            y: -40
        }).to(image_texts[2], 0.2, {
            autoAlpha: 1,
            y: 0
        }).from("#progress-bar span", imagesAnimText.duration(), {
            scaleX: 0,
            transformOrigin: "left",
            ease: Linear.easeNone
        }, 0);
    // imagesAnim
    // .to(images[0], 2.5, {scale:1,y:-20}) 
    // .to(image_texts[0], {autoAlpha:1,y:-20})
    // .to(images[0], 0.4, {autoAlpha:0}, '-=1') 
    // .to(image_texts[0], {autoAlpha:0,y:20}, '-=1')
    // .to(images[1], 2, {scale:1,y:-20}, '-=1') 
    // .to(image_texts[1], {autoAlpha:1,y:-20}) 
    // .to(images[1], 0.4, {autoAlpha:0}, '-=1')
    // .to(image_texts[1], {autoAlpha:0,y:20}, '-=1')
    // .to(images[2], 2, {scale:1,y:-20}, '-=1') 
    // .to(image_texts[2], {autoAlpha:1,y:-20})  
    // another script
    //    image_1 = new TimelineMax, image_1.set("#carouselSliders", {
    //     autoAlpha: 0,
    //     y: 90,
    //     delay: 0
    // }), image_1.to("#carouselSliders", 1, {
    //     autoAlpha: 1,
    //     y: 0,
    //     duration: 1,
    //     ease: Power0.easeNone
    // }).addPause(1, (function () {
    //     setTimeout((function () {
    //         image_1.play()
    //     }), 1e3)
    // }))
    // .to(".carousel_items1 .image-1", 2, { autoAlpha: 0, y: -20, ease: Power1.easeout }),
    // image = new TimelineMax, image.set(".carousel_items1 .image-1", {
    //     autoAlpha: 1,
    //     y: 0,
    //     // zIndex: 1,
    //     delay: 0
    // }), image.to(".carousel_items1 .image-1", {
    //     autoAlpha: 1,
    //     y: 0,
    //     duration: 2,
    //     ease: Power0.easeNone
    // }).addPause(2, (function () {
    //     setTimeout((function () {
    //         image.play()
    //     }), 1e3)
    // }))
    //     .to(".carousel_items1 .image-1", {
    //         autoAlpha: 0,
    //         y: -20,
    //         ease: Power1.easeout
    //     }),
    //     text_1 = new TimelineMax, text_1.set("#text_1", {
    //         autoAlpha: 0,
    //         y: 40,
    //         delay: 0.1
    //     }), text_1.to("#text_1", {
    //         autoAlpha: 1,
    //         y: 0,
    //         duration: 1,
    //         ease: Power0.easeNone
    //     }).addPause(1.6, (function () {
    //         setTimeout((function () {
    //             text_1.play()
    //         }), 1e3)
    //     })).to("#text_1", {
    //         autoAlpha: 0,
    //         y: -20,
    //         ease: Power1.easeout
    //     })
    // second slide
    // image_2 = new TimelineMax, image_2.set(".carousel_items2 .image-1", {
    //     autoAlpha: 1,
    //     y: 0,
    //     delay: 2
    // }), image_2.to(".carousel_items2 .image-1", 1, {
    //     autoAlpha: 1,
    //     y: 0,
    //     duration: 4,
    //     ease: Power0.easeNone
    // }).addPause(4, (function () {
    //     setTimeout((function () {
    //         image_2.play()
    //     }), 1e3)
    // }))
    //     .to(".carousel_items2 .image-1", 2, {
    //         autoAlpha: 0,
    //         y: -20,
    //         ease: Power1.easeout
    //     }),
    // text_2 = new TimelineMax, text_2.set("#text_2", {
    //     autoAlpha: 0,
    //     y: 40,
    //     delay: 2.1
    // }), text_2.to("#text_2", {
    //     autoAlpha: 1,
    //     y: 0,
    //     duration: 2,
    //     ease: Power0.easeNone
    // }).addPause(2.6, (function () {
    //     setTimeout((function () {
    //         text_2.play()
    //     }), 1e3)
    // }))
    //     .to("#text_2", {
    //         autoAlpha: 0,
    //         y: -20,
    //         ease: Power1.easeout
    //     }),
    // third slide
    //     image_3 = new TimelineMax, image_3.set(".carousel_items3 .image-1", {
    //         autoAlpha: 1,
    //         y: 0,
    //         delay: 4
    //     }), image_3.to(".carousel_items3 .image-1", 1, {
    //         autoAlpha: 1,
    //         y: 0,
    //         duration: 6,
    //         ease: Power0.easeNone
    //     }).addPause(6, (function () {
    //         setTimeout((function () {
    //             image_3.play()
    //         }), 1e3)
    //     }))
    // text_3 = new TimelineMax, text_3.set("#text_3", {
    //     autoAlpha: 0,
    //     y: 40,
    //     delay: 4.1
    // }), text_3.to("#text_3", {
    //     autoAlpha: 1,
    //     y: 0,
    //     duration: 5,
    //     ease: Power0.easeNone
    // }).addPause(5.6, (function () {
    //     setTimeout((function () {
    //         text_3.play()
    //     }), 1e3)
    // }))
    }, 5500);
    // });
    // another script
    // ScrollTrigger.defaults({
    //     markers:false
    //   })
    //   var points = gsap.utils.toArray('.point');
    //   var indicators = gsap.utils.toArray('.indicator');
    //   var height = 100 * points.length;
    //   gsap.set('.indicators', {display: "flex"});
    //   var tl = gsap.timeline({
    //     duration: points.length,
    //     scrollTrigger: {
    //       trigger: ".philosophie",
    //       start: "top center",
    //       end: "+="+height+"%",
    //       scrub: true,
    //       id: "points",
    //     }
    //   })
    //   var pinner = gsap.timeline({
    //     scrollTrigger: {
    //       trigger: ".philosophie .wrapper",
    //       start: "top top",
    //       end: "+="+height+"%",
    //       scrub: true,
    //       pin: ".philosophie .wrapper",
    //       pinSpacing: true,
    //       id: "pinning",
    //       markers: true
    //     }
    //   })
    //   points.forEach(function(elem, i) {
    //     gsap.set(elem, {position: "absolute", top: 0});
    //     tl.to(indicators[i], {backgroundColor: "orange", duration: 0.25}, i)
    //     tl.from(elem.querySelector('img'), {autoAlpha:0}, i)
    //     tl.from(elem.querySelector('article'), {autoAlpha:0, translateY: 100}, i)
    //     if (i != points.length-1) {
    //       tl.to(indicators[i], {backgroundColor: "#adadad", duration: 0.25}, i+0.75)
    //       tl.to(elem.querySelector('article'), {autoAlpha:0, translateY: -100}, i + 0.75)
    //       tl.to(elem.querySelector('img'), {autoAlpha:0}, i + 0.75)
    //     }
    //   });
    // ScrollTrigger.defaults({
    //             markers: false
    //         })
    //         var points = gsap.utils.toArray('.point');
    //         var height = 100 * points.length;
    // console.log("+="+height+"%");
    //         var tl_slider = gsap.timeline({
    //             duration: points.length,
    //             scrollTrigger: {
    //                 trigger: ".recruitment-section",
    //                 start: "bottom bottom",
    //                 end: "+="+height+"%",
    //                 scrub: true,
    //                 id: "points",
    //                 markers: true
    //             }
    //         })
    //         var pinner = gsap.timeline({
    //             scrollTrigger: {
    //                 trigger: ".recruitment-section",
    //                 start: "bottom bottom",
    //                 end: "+="+height+"%",
    //                 scrub: true,
    //                 pin: ".service-wrapper",
    //                 pinSpacing: true,
    //                 id: "pinning",
    //                 markers: true
    //             }
    //         })
    //         points.forEach(function (elem, i) {
    //             gsap.set(elem, {
    //                 position: "absolute",
    //                 top: 0
    //             });
    //             tl_slider.from(elem.querySelector('img'), {
    //                 autoAlpha: 0
    //             }, i)
    //             tl_slider.from(elem.querySelector('article'), {
    //                 autoAlpha: 0,
    //                 translateY: 100
    //             }, i)
    //             if (i != points.length - 1) {
    //                 tl_slider.to(elem.querySelector('article'), {
    //                     autoAlpha: 0,
    //                     translateY: -100
    //                 }, i + 0.75)
    //                 tl_slider.to(elem.querySelector('img'), {
    //                     autoAlpha: 0
    //                 }, i + 0.75)
    //             }
    //         });
    //    another script
    gsap.to(".banner-content", {
        yPercent: -200,
        ease: "none",
        scrollTrigger: {
            trigger: "#accountingSection",
            // start: "top bottom", // the default values
            // end: "bottom top",
            scrub: true
        }
    });
    gsap.to(".banner-slider", {
        yPercent: -250,
        ease: "none",
        scrollTrigger: {
            trigger: "#accountingSection",
            // start: "top bottom", // the default values
            // end: "bottom top",
            scrub: true
        }
    });
    // another script starts
    console.clear();
    var el = document.querySelector(".blockquote");
    var s = new SplitText(el, {
        type: "lines,words",
        linesClass: "ts-line"
    });
    var tld = new TimelineMax({
        delay: 0.5,
        repeatDelay: 0.5,
        repeat: -1
    });
    tld.addLabel("enter");
    tld.staggerFromTo(s.words, 0.6, {
        yPercent: 100
    }, {
        yPercent: 0,
        ease: "Circ.easeOut"
    }, 0.2, "enter");
    tld.staggerFromTo(s.words, 0.6, {
        opacity: 0
    }, {
        opacity: 1,
        ease: "Power1.easeOut"
    }, 0.2, "enter");
    tld.fromTo(".note", 1, {
        opacity: 0
    }, {
        opacity: 0.6,
        ease: "Linear.easeNone"
    });
    tld.addPause();
    tld.addLabel("exit");
    tld.to(".note", 0.5, {
        opacity: 0,
        ease: "Linear.easeNone"
    });
    tld.staggerTo(s.words, 0.4, {
        yPercent: -200,
        ease: "Circ.easeIn"
    }, 0.1, "exit");
    tld.staggerTo(s.words, 0.4, {
        opacity: 0,
        ease: "Power1.easeIn"
    }, 0.1, "exit");
});

},{}]},["6049Q","2Zat1"], "2Zat1", "parcelRequire75e3")

//# sourceMappingURL=index.3976b811.js.map
