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
})({"jQVXF":[function(require,module,exports) {
"use strict";
var global = arguments[3];
var HMR_HOST = null;
var HMR_PORT = null;
var HMR_SECURE = false;
var HMR_ENV_HASH = "d6ea1d42532a7575";
module.bundle.HMR_BUNDLE_ID = "0bcb44a518dbc454";
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

},{}],"1SICI":[function(require,module,exports) {
window.addEventListener("load", function() {
    //Home Page Loader on load effect
    setTimeout(function() {
        $("body").removeClass("overflow-hidden");
        $("#loader").hide();
    }, 5500);
    //Animated Scrolls on load effect
    setTimeout(function() {
        $(".about-scroll a").fadeIn("slow");
        setTimeout(function() {
            $("#scroll-black-before").addClass("off");
            $("#scroll-black-after").removeClass("off");
        }, 5500 * (Math.random() * 3));
    }, 4200);
    setTimeout(function() {
        $(".home-scroll a").fadeIn("slow");
        setTimeout(function() {
            $("#scroll-white-before").addClass("off");
            $("#scroll-white-after").removeClass("off");
        }, 5500 * (Math.random() * 4));
    }, 8100);
    setTimeout(function() {
        $(".knowledge-scroll a").fadeIn("slow");
        setTimeout(function() {
            $("#scroll-white-before").addClass("off");
            $("#scroll-white-after").removeClass("off");
        }, 5500 * (Math.random() * 3));
    }, 800);
    //Animated Arrows on load effect
    $(".find-more a").hover(function(event1) {
        event1.preventDefault();
        $(this).find("#arrow-white-before").toggleClass("off");
        $(this).find("#arrow-white-after").toggleClass("off");
        $(this).find("#arrow-yellow-before").toggleClass("off");
        $(this).find("#arrow-yellow-after").toggleClass("off");
    });
    $(".next-btn").hover(function(event1) {
        event1.preventDefault();
        $(this).find("#arrow-white-before").toggleClass("off");
        $(this).find("#arrow-white-after").toggleClass("off");
    });
    $(".items").hover(function(event1) {
        event1.preventDefault();
        $(this).find("#arrow-white-before").toggleClass("off");
        $(this).find("#arrow-white-after").toggleClass("off");
    });
    $(function() {
        //Home and About Page Text Fade Effect on Load
        setTimeout(function() {
            $(".home-text .fade1").fadeIn("slow");
        }, 6000);
        setTimeout(function() {
            $(".home-text .fade2").fadeIn("slow");
        }, 6300);
        setTimeout(function() {
            $(".home-text .fade3").fadeIn("slow");
        }, 6600);
        setTimeout(function() {
            $(".home-text .fade4").fadeIn("slow");
        }, 6900);
        setTimeout(function() {
            $(".home-text .fade5").fadeIn("slow");
        }, 7200);
        setTimeout(function() {
            $(".home-text .fade6").fadeIn("slow");
        }, 7500);
        setTimeout(function() {
            $(".home-text .fade7").fadeIn("slow");
        }, 7800);
        setTimeout(function() {
            $(".about-text .fade1").fadeIn("slow");
        }, 300);
        setTimeout(function() {
            $(".about-text .fade2").fadeIn("slow");
        }, 600);
        setTimeout(function() {
            $(".about-text .fade3").fadeIn("slow");
        }, 900);
        setTimeout(function() {
            $(".about-text .fade4").fadeIn("slow");
        }, 1200);
        setTimeout(function() {
            $(".about-text .fade5").fadeIn("slow");
        }, 1500);
        setTimeout(function() {
            $(".about-text .fade6").fadeIn("slow");
        }, 1800);
        setTimeout(function() {
            $(".about-text .fade7").fadeIn("slow");
        }, 2100);
        setTimeout(function() {
            $(".about-text .fade8").fadeIn("slow");
        }, 2400);
        setTimeout(function() {
            $(".about-text .fade9").fadeIn("slow");
        }, 2700);
        setTimeout(function() {
            $(".about-text .fade10").fadeIn("slow");
        }, 3000);
        setTimeout(function() {
            $(".about-text .fade11").fadeIn("slow");
        }, 3300);
        setTimeout(function() {
            $(".about-text .fade12").fadeIn("slow");
        }, 3600);
        setTimeout(function() {
            $(".about-text .fade13").fadeIn("slow");
        }, 3900);
        setTimeout(function() {
            $(".knowlege-text .fade1").fadeIn("slow");
        }, 100);
    });
    //Home Page Testimonials
    $("#testimonials").owlCarousel({
        loop: true,
        items: 2,
        touchDrag: false,
        mouseDrag: false,
        margin: 0,
        autoplay: false,
        dots: false,
        nav: true,
        autoplayTimeout: 8500,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1170: {
                items: 2
            }
        }
    });
    //Home Page Recruitment Section Hover Effect
    $(".one").click(function() {
        $(this).addClass("show");
        $(this).siblings(".one").addClass("show");
        $(this).siblings(".two").removeClass("show");
        $(this).siblings(".three").removeClass("show");
        $(this).siblings(".four").removeClass("show");
        $(this).siblings(".five").removeClass("show");
        $(this).siblings(".six").removeClass("show");
        $(this).siblings(".seven").removeClass("show");
    });
    $(".two").click(function() {
        $(this).addClass("show");
        $(this).siblings(".one").removeClass("show");
        $(this).siblings(".two").addClass("show");
        $(this).siblings(".three").removeClass("show");
        $(this).siblings(".four").removeClass("show");
        $(this).siblings(".five").removeClass("show");
        $(this).siblings(".six").removeClass("show");
        $(this).siblings(".seven").removeClass("show");
    });
    $(".three").click(function() {
        $(this).addClass("show");
        $(this).siblings(".one").removeClass("show");
        $(this).siblings(".two").removeClass("show");
        $(this).siblings(".three").addClass("show");
        $(this).siblings(".four").removeClass("show");
        $(this).siblings(".five").removeClass("show");
        $(this).siblings(".six").removeClass("show");
        $(this).siblings(".seven").removeClass("show");
    });
    $(".four").click(function() {
        $(this).addClass("show");
        $(this).siblings(".one").removeClass("show");
        $(this).siblings(".two").removeClass("show");
        $(this).siblings(".three").removeClass("show");
        $(this).siblings(".four").addClass("show");
        $(this).siblings(".five").removeClass("show");
        $(this).siblings(".six").removeClass("show");
        $(this).siblings(".seven").removeClass("show");
    });
    $(".five").click(function() {
        $(this).addClass("show");
        $(this).siblings(".one").removeClass("show");
        $(this).siblings(".two").removeClass("show");
        $(this).siblings(".three").removeClass("show");
        $(this).siblings(".four").removeClass("show");
        $(this).siblings(".five").addClass("show");
        $(this).siblings(".six").removeClass("show");
        $(this).siblings(".seven").removeClass("show");
    });
    $(".six").click(function() {
        $(this).addClass("show");
        $(this).siblings(".one").removeClass("show");
        $(this).siblings(".two").removeClass("show");
        $(this).siblings(".three").removeClass("show");
        $(this).siblings(".four").removeClass("show");
        $(this).siblings(".five").removeClass("show");
        $(this).siblings(".six").addClass("show");
        $(this).siblings(".seven").removeClass("show");
    });
    $(".seven").click(function() {
        $(this).addClass("show");
        $(this).siblings(".one").removeClass("show");
        $(this).siblings(".two").removeClass("show");
        $(this).siblings(".three").removeClass("show");
        $(this).siblings(".four").removeClass("show");
        $(this).siblings(".five").removeClass("show");
        $(this).siblings(".six").removeClass("show");
        $(this).siblings(".seven").addClass("show");
    });
    $(".close-box").click(function() {
        $(this).parent().parent().find(".show").removeClass("show");
        event.stopPropagation();
    });
    $(".open-one").click(function() {
        $(this).parent().parent().find(".seven").removeClass("show");
        $(this).parent().parent().find(".one").addClass("show");
        event.stopPropagation();
    });
    $(".open-two").click(function() {
        $(this).parent().parent().find(".one").removeClass("show");
        $(this).parent().parent().find(".two").addClass("show");
        event.stopPropagation();
    });
    $(".open-three").click(function() {
        $(this).parent().parent().find(".two").removeClass("show");
        $(this).parent().parent().find(".three").addClass("show");
        event.stopPropagation();
    });
    $(".open-four").click(function() {
        $(this).parent().parent().find(".three").removeClass("show");
        $(this).parent().parent().find(".four").addClass("show");
        event.stopPropagation();
    });
    $(".open-five").click(function() {
        $(this).parent().parent().find(".four").removeClass("show");
        $(this).parent().parent().find(".five").addClass("show");
        event.stopPropagation();
    });
    $(".open-six").click(function() {
        $(this).parent().parent().find(".five").removeClass("show");
        $(this).parent().parent().find(".six").addClass("show");
        event.stopPropagation();
    });
    $(".open-seven").click(function() {
        $(this).parent().parent().find(".six").removeClass("show");
        $(this).parent().parent().find(".seven").addClass("show");
        event.stopPropagation();
    });
    $(".team-image").hover(function() {
        $(this).parent().parent().find(".team-inner").toggleClass("show");
    });
    $(".nav-item").hover(function() {
        $("body").toggleClass("nav-hover");
    });
    //About Page Team Section Hover Effect
    $(".team-image").hover(function() {
        $(this).parent().parent().parent().parent().find(".team-list").toggleClass("offAll");
    });
    //About Page Sections
    $(".teamSectionTitle").click(function() {
        $("html, body").animate({
            scrollTop: $(".section-title").offset().top - 60
        }, 500);
    });
    $(".teamSection").click(function() {
        $("html, body").animate({
            scrollTop: $("#teamSection").offset().top - 60
        }, 500);
    });
    $(".knowledgeMailSection").click(function() {
        $("html, body").animate({
            scrollTop: $("#knowledgeMailSection").offset().top - 60
        }, 500);
    });
    //Animation Logos
    var animation = lottie.loadAnimation({
        name: "Logo Black Loader",
        container: document.getElementById("logoContainerLoader"),
        path: "/json/logo-loader.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Logo Black Header",
        container: document.getElementById("logoContainerHeader"),
        path: "/json/logo-black.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Logo Black Footer",
        container: document.getElementById("logoContainerFooter"),
        path: "/json/logo-black.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Logo Yellow",
        container: document.getElementById("logoContainerYellow"),
        path: "/json/logo-yellow.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Scroll White Before",
        container: document.getElementById("scroll-white-before"),
        path: "/json/scroll-white-before.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Scroll White After",
        container: document.getElementById("scroll-white-after"),
        path: "/json/scroll-white-after.json",
        renderer: "svg",
        loop: true,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Scroll Black Before",
        container: document.getElementById("scroll-black-before"),
        path: "/json/scroll-black-before.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Scroll Black After",
        container: document.getElementById("scroll-black-after"),
        path: "/json/scroll-black-after.json",
        renderer: "svg",
        loop: true,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White Before",
        container: document.getElementById("arrow-white-before"),
        path: "/json/arrow-white-before.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White After",
        container: document.getElementById("arrow-white-after"),
        path: "/json/arrow-white-after.json",
        renderer: "svg",
        loop: true,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Arrow Yellow Before",
        container: document.getElementById("arrow-yellow-before"),
        path: "/json/arrow-yellow-before.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Arrow Yellow After",
        container: document.getElementById("arrow-yellow-after"),
        path: "/json/arrow-yellow-after.json",
        renderer: "svg",
        loop: true,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White Left Before",
        container: document.getElementById("arrow-white-left-before"),
        path: "/json/arrow-white-before.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White Left After",
        container: document.getElementById("arrow-white-left-after"),
        path: "/json/arrow-white-after.json",
        renderer: "svg",
        loop: true,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White Right Before",
        container: document.getElementById("arrow-white-right-before"),
        path: "/json/arrow-white-before.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White Right After",
        container: document.getElementById("arrow-white-right-after"),
        path: "/json/arrow-white-after.json",
        renderer: "svg",
        loop: true,
        autoplay: true
    });
    let itemImage1 = document.getElementById("itemImage1");
    let itemImage2 = document.getElementById("itemImage2");
    let itemImage3 = document.getElementById("itemImage3");
    let itemImage1Animate = lottie.loadAnimation({
        name: "Item Image 1",
        container: itemImage1,
        renderer: "svg",
        loop: false,
        autoplay: true,
        path: "/json/itemImage1.json"
    });
    let itemImage2Animate = lottie.loadAnimation({
        name: "Item Image 2",
        container: itemImage2,
        renderer: "svg",
        loop: false,
        autoplay: false,
        path: "/json/itemImage2.json"
    });
    let itemImage3Animate = lottie.loadAnimation({
        name: "Item Image 3",
        container: itemImage3,
        renderer: "svg",
        loop: false,
        autoplay: false,
        path: "/json/itemImage3.json"
    });
    var animation = lottie.loadAnimation({
        name: "goto2 Arrow Before",
        container: document.getElementById("goto2-arrow-before"),
        path: "/json/arrow-yellow-before.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "goto2 Arrow After",
        container: document.getElementById("goto2-arrow-after"),
        path: "/json/arrow-yellow-after.json",
        renderer: "svg",
        loop: true,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "goto1 Arrow Before",
        container: document.getElementById("goto1-arrow-before"),
        path: "/json/arrow-yellow-before.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "goto1 Arrow After",
        container: document.getElementById("goto1-arrow-after"),
        path: "/json/arrow-yellow-after.json",
        renderer: "svg",
        loop: true,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "goto3 Arrow Before",
        container: document.getElementById("goto3-arrow-before"),
        path: "/json/arrow-yellow-before.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "goto3 Arrow After",
        container: document.getElementById("goto3-arrow-after"),
        path: "/json/arrow-yellow-after.json",
        renderer: "svg",
        loop: true,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "backTo2 Arrow Before",
        container: document.getElementById("backTo2-arrow-before"),
        path: "/json/arrow-yellow-before.json",
        renderer: "svg",
        loop: false,
        autoplay: true
    });
    var animation = lottie.loadAnimation({
        name: "backTo2 Arrow After",
        container: document.getElementById("backTo2-arrow-after"),
        path: "/json/arrow-yellow-after.json",
        renderer: "svg",
        loop: true,
        autoplay: true
    });
    //Contact Page Animation Script
    //on page load animations
    setTimeout(function() {
        $("#map-text").fadeIn("slow");
    }, 500);
    setTimeout(function() {
        $("#hideUKMap, #hideUSMap").fadeIn("slow");
    }, 1000);
    setTimeout(function() {
        $("#showUKMap, #showUSMap").fadeIn("slow");
    }, 2000);
    //UK Map
    $("#showUKMap").hover(function() {
        $(this).parent().parent().find("#arrow-white-right-before").toggleClass("off");
        $(this).parent().parent().find("#arrow-white-right-after").toggleClass("off");
    });
    $("#hideUKMap").hover(function() {
        $(this).children().find("#arrow-white-left-before").toggleClass("off");
        $(this).children().find("#arrow-white-left-after").toggleClass("off");
    });
    $("#showUKMap").click(function() {
        $(this).parent().find("#showUKMap").fadeOut("slow");
        // $(this).parent().parent().find("#hideUKMap .arrow-wrapper").addClass('rotate')
        $(this).parent().parent().find("#showUSMap").fadeOut("slow");
        $(this).parent().parent().find("#hideUSMap").fadeOut("slow");
        $(this).parent().parent().find("#map-text").fadeOut("slow");
        $(this).parent().parent().parent().find(".contact-content").addClass("moveLeft");
        $(this).siblings(".UKMap").addClass("show");
    // setTimeout(function(){$('.UKMap .address-wrapper').animate({"right":"0%"},"slow");},100)
    });
    $("#hideUKMap").click(function() {
        $(this).parent().parent().parent().find("#showUKMap").fadeToggle("slow");
        $(this).parent().parent().parent().find("#showUSMap").fadeToggle("slow");
        // $(this).children().removeClass('rotate')
        $(this).parent().parent().find("#hideUSMap").fadeToggle("slow");
        $(this).parent().parent().find("#map-text").fadeToggle("slow");
        $(this).parent().parent().parent().parent().find(".contact-content").toggleClass("moveLeft");
        $(this).parent().parent().parent().find(".UKMap").toggleClass("show");
    // setTimeout(function(){$('.UKMap .address-wrapper').animate({"right":"-50%"},"slow");},100)
    });
    //US Map
    $("#showUSMap").hover(function() {
        $(this).parent().parent().find("#arrow-white-left-before").toggleClass("off");
        $(this).parent().parent().find("#arrow-white-left-after").toggleClass("off");
    });
    $("#hideUSMap").hover(function() {
        $(this).children().find("#arrow-white-right-before").toggleClass("off");
        $(this).children().find("#arrow-white-right-after").toggleClass("off");
    });
    $("#showUSMap").click(function() {
        $(this).parent().find("#showUSMap").fadeOut("slow");
        // $(this).parent().parent().find("#hideUSMap .arrow-wrapper").addClass('rotate')
        $(this).parent().parent().find("#showUKMap").fadeOut("slow");
        $(this).parent().parent().find("#hideUKMap").fadeOut("slow");
        $(this).parent().parent().find("#map-text").fadeOut("slow");
        $(this).parent().parent().parent().find(".contact-content").addClass("moveRight");
        $(this).siblings(".USMap").addClass("show");
    // setTimeout(function(){$('.USMap .address-wrapper').animate({"left":"0%"},"slow");},100)
    });
    $("#hideUSMap").click(function() {
        $(this).parent().parent().parent().find("#showUSMap").fadeToggle("slow");
        $(this).parent().parent().parent().find("#showUKMap").fadeToggle("slow");
        // $(this).children().removeClass('rotate')
        $(this).parent().parent().find("#hideUKMap").fadeToggle("slow");
        $(this).parent().parent().find("#map-text").fadeToggle("slow");
        $(this).parent().parent().parent().parent().find(".contact-content").toggleClass("moveRight");
        $(this).parent().parent().parent().find(".USMap").toggleClass("show");
    // setTimeout(function(){$('.USMap .address-wrapper').animate({"left":"-50%"},"slow");},100)
    });
    //Home Page Slider Animation Script
    $("#goto2").click(function() {
        event.preventDefault();
        $(this).parent().parent().parent().find(".item-wrapper").css({
            "right": "34.505208333333336vw"
        });
        $(this).parent().parent().parent().find("#itemImage1").removeClass("on");
        $(this).parent().parent().parent().find("#itemImage2").addClass("on");
        $(this).parent().parent().parent().find("#itemImage3").removeClass("on");
        $(this).delay(300).fadeOut("fast");
        $(this).siblings("#goto3").delay(300).fadeIn("fast");
        $(this).siblings("#goto1").delay(300).fadeIn("fast");
        itemImage2Animate.playSegments([
            0,
            43.0000017514259
        ]);
    });
    $("#goto1").click(function() {
        event.preventDefault();
        $(this).parent().parent().parent().find(".item-wrapper").css({
            "right": "0"
        });
        $(this).parent().parent().parent().find("#itemImage1").addClass("on");
        $(this).parent().parent().parent().find("#itemImage2").removeClass("on");
        $(this).parent().parent().parent().find("#itemImage3").removeClass("on");
        $(this).delay(300).fadeOut("fast");
        $(this).siblings("#goto2").delay(300).fadeIn("fast");
        $(this).siblings("#goto3").delay(300).fadeOut("fast");
        itemImage1Animate.playSegments([
            0,
            95.0000038694293
        ]);
        itemImage1Animate.setDirection(-1);
        itemImage1Animate.play();
    });
    $("#goto3").click(function() {
        event.preventDefault();
        $(this).parent().parent().parent().find(".item-wrapper").css({
            "right": "69.01041666666667vw"
        });
        $(this).parent().parent().parent().find("#itemImage1").removeClass("on");
        $(this).parent().parent().parent().find("#itemImage2").removeClass("on");
        $(this).parent().parent().parent().find("#itemImage3").addClass("on");
        $(this).delay(300).addClass("fadeOff");
        $(this).siblings("#backTo2").delay(300).fadeIn("slow");
        $(this).siblings("#goto2").delay(300).fadeOut("slow");
        $(this).siblings("#goto1").delay(300).fadeOut("slow");
        itemImage3Animate.playSegments([
            0,
            41.0000016699642
        ]);
    });
    $("#backTo2").click(function() {
        event.preventDefault();
        $(this).parent().parent().parent().find(".item-wrapper").css({
            "right": "34.505208333333336vw"
        });
        $(this).parent().parent().parent().find("#itemImage1").removeClass("on");
        $(this).parent().parent().parent().find("#itemImage2").addClass("on");
        $(this).parent().parent().parent().find("#itemImage3").removeClass("on");
        $(this).delay(300).fadeOut("fast");
        $(this).siblings("#goto1").delay(300).fadeIn("slow");
        $(this).siblings("#goto3").delay(300).fadeIn("slow");
        $(this).siblings("#goto3").delay(300).removeClass("fadeOff");
        itemImage2Animate.playSegments([
            0,
            43.0000017514259
        ]);
        itemImage2Animate.setDirection(-1);
        itemImage1Animate.play();
    });
    $("#goto2").hover(function() {
        $(this).children().find("#goto2-arrow-before").toggleClass("off");
        $(this).children().find("#goto2-arrow-after").toggleClass("off");
    });
    $("#goto1").hover(function() {
        $(this).children().find("#goto1-arrow-before").toggleClass("off");
        $(this).children().find("#goto1-arrow-after").toggleClass("off");
    });
    $("#goto3").hover(function() {
        $(this).children().find("#goto3-arrow-before").toggleClass("off");
        $(this).children().find("#goto3-arrow-after").toggleClass("off");
    });
    $("#backTo2").hover(function() {
        $(this).children().find("#backTo2-arrow-before").toggleClass("off");
        $(this).children().find("#backTo2-arrow-after").toggleClass("off");
    });
});
//AOS Amnimation
$(window).on("scroll", function() {
    AOS.init({
        duration: 600
    });
    // if ($(this).scrollTop() > 30) {$('.image-wrapper-outer').addClass('fade-out');}
    var y = $(this).scrollTop();
    if (y > 1300) $(".vertical .arrow-image").fadeIn("slow");
    if (y > 1500) {
        $(".item.one").addClass("show");
        $(".desc.one ").addClass("show");
    }
    if (y > 2500) $("#image-wrapper").addClass("fixed");
});
$(function() {
    AOS.init({
        duration: 600
    });
});
$(window).scroll(function() {});
$(document).ready(function() {
    $(".nav-pills .nav-item .nav-link").click(function() {
        var position = $(this).parent().position();
        var width = $(this).parent().width();
        $(".nav-pills .slider").css({
            "left": +position.left,
            "width": width
        });
    });
    var actWidth = $(".nav-pills").find(".active").parent("li").width();
    var actPosition = $(".nav-pills .nav-item .active").position();
    $(".nav-pills .slider").css({
        "left": +actPosition.left,
        "width": actWidth
    });
});
jQuery(document).ready(function($1) {
    // var teamWrapperHeight = $('.team-wrapper').height();
    // var infoWrapper = $('.info-wrapper').offset().top;
    // var infoWrapperHeight = $('.info-wrapper').height();
    // var colOffset = $('.four-col').offset().top;
    //
    // var addRelative = teamWrapperHeight + infoWrapper - 335;
    // var addFixed = colOffset - (teamWrapperHeight + infoWrapperHeight) + 670;
    // $(window).scroll(function() {
    //     if ($(window).scrollTop() > addRelative ) {
    //         $('.info-wrapper').addClass("relative");
    //     } else {
    //         $('.info-wrapper').removeClass("relative");
    //     }
    //     if ($(window).scrollTop() > addFixed) {
    //         $('.info-wrapper').addClass('fixed');
    //         $('.info-wrapper').removeClass("relative");
    //     } else {
    //         $('.info-wrapper').removeClass("fixed");
    //     }
    // });
    $1(window).scroll(function() {
        if ($1(window).scrollTop() > 1500) $1("#image-wrapper").addClass("fixed");
        else $1("#image-wrapper").removeClass("fixed");
    });
    var teamTitleOffset_ = $1(".section-title").offset().top + parseInt($1(".section-title").height());
    var teamWrapperOffset_ = $1(".team-wrapper").offset().top;
    var diffBetweenTwoblcoks = teamWrapperOffset_ - teamTitleOffset_;
    if ($1(window).width() >= 768) {
        var teamSectionTitle = $1(".section-title");
        var height = teamSectionTitle.height() / 1;
        var top = teamSectionTitle.offset().top + height;
        var lastscrollTop = 0;
        $1(window).on("scroll", function() {
            var scrollTop = $1(this).scrollTop();
            if (scrollTop > $1(".info-wrapper").offset().top && scrollTop < $1(".team-wrapper").offset().top - 335) $1(".info-wrapper").css({
                "position": "fixed",
                "top": 0,
                "color": "black"
            });
            else if (scrollTop > $1(".team-wrapper").offset().top + 335) $1(".info-wrapper").css({
                "position": "relative",
                "top": 0,
                "color": "blue"
            });
            else if (scrollTop < $1(".team-wrapper").offset().top && scrollTop > $1(".section-title").offset().top + parseInt($1(".section-title").height() + 155)) $1(".info-wrapper").css({
                "position": "fixed",
                "top": 0,
                "color": "green"
            });
            else if (scrollTop < $1(".section-title").offset().top + parseInt($1(".section-title").height())) {
                console.log("this is the height " + diffBetweenTwoblcoks);
                $1(".info-wrapper").css({
                    "position": "relative",
                    "top": -diffBetweenTwoblcoks - 175,
                    "color": "red"
                });
            }
            return false;
        });
    }
    $1(function() {
        var boxes = $1(".image-wrapper"), $window = $1(window);
        $window.scroll(function() {
            var scrollTop = $window.scrollTop();
            boxes.each(function() {
                var $this = $1(this), scrollspeed = parseInt($this.data("scroll-speed")), val = -scrollTop / scrollspeed;
                $this.css("transform", "translateY(" + val + "px)");
            });
        });
    });
});

},{}]},["jQVXF","1SICI"], "1SICI", "parcelRequire75e3")

//# sourceMappingURL=knowledge.18dbc454.js.map
