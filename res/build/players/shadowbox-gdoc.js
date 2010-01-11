/**
 * The Shadowbox gdoc player class, for Shadowbox v3.x
 * Ex: Shadowbox.init({ players:['gdoc'] })
 *
 * @version 1.0.0
 */

(function(S){
	  if(!S.options.ext.gdoc){
			S.options.ext.gdoc = ['pdf', 'ppt'];
		}
		if(!S.regex.gdoc){
			S.regex.gdoc = new RegExp('\.(' + S.options.ext.gdoc.join('|') + ')\s*$', 'i');
		}
		//NB can't override getPlayer (it's private) but can override buildCacheObj!...
		S.gdoc_buildCacheObj = S.buildCacheObj;
		S.buildCacheObj = function(link, opts){
			var rtn = S.gdoc_buildCacheObj(link, opts);
			//NB if url is off-domain, player is set to iframe by default; but if we
			//   assume that ext.iframe and ext.gdoc are unique then it doesn't matter
			if({unsupported:1, iframe:1}[rtn.player]){
        var q = rtn.content.indexOf('?');
				if(S.regex.gdoc.test( q > 0 ? rtn.content.substring(0, q) : rtn.content )){
					rtn.player = 'gdoc';
				}
			}
			return rtn;
		};

    /**
     * Constructor. This class is used to display pdf/ppt pages in an HTML iframe,
		 * using Google Docs' Embedded Viewer.
     *
     * @param   Object      obj     The content object
     * @public
     */
    S.gdoc = function(obj){
        this.obj = obj;
        //set cacheBuster:true in init() options and it should prevent Google caching the pdf
				if(S.options.cacheBuster){
					this.floc = encodeURIComponent(
													this.obj.content +
													(this.obj.content.indexOf('?') > 0
															? '&__c_b='
															: '?__c_b='
													) + (new Date()).getTime() );
				}else{
					this.floc = encodeURIComponent(this.obj.content);
				}
				this.floc = 'http://docs.google.com/gview?embedded=true&url=' + this.floc;
        // height/width default to full viewport height/width
        var so = document.getElementById('sb-overlay');
        this.height = obj.height ? parseInt(obj.height, 10) : so.offsetHeight;
        this.width = obj.width ? parseInt(obj.width, 10) : so.offsetWidth;
    }

    S.gdoc.prototype = {
        /**
         * Appends this iframe to the document.
         *
         * @param   HTMLElement     body    The body element
         * @param   String          id      The content id
         * @param   Object          dims    The current Shadowbox dimensions
         * @return  void
         * @public
         */
        append: function(body, id, dims){
            this.id = id;
						body.innerHTML = '<iframe id="' + id + '" name="' + id +
									           '" height="100%" width="100%" marginwidth="0" marginheight="0" scrolling="auto" ' +
									           (S.client.isIE6 ? 'frameBorder="0" ' : 'frameborder="0" ') +
									           (S.client.isIE ? 'allowtransparency="true" ' : '') +
									           'src="javascript:document.write(unescape(\'%3Cbody%20style%3D%22background%3A%23000000%3B%22%3E%3C/body%3E\'));"' +
									           '</iframe>';
        }
        /**
         * Removes this iframe from the document.
         *
         * @return  void
         * @public
         */
      , remove: function(){
            var el = document.getElementById(this.id);
            if(el){
                S.lib.remove(el);
                if(S.client.isGecko)
                    delete window.frames[this.id]; // needed for Firefox
            }
        }
        /**
         * Callback function to process after this content has been loaded.
         *
         * @return  void
         * @public
         */
      , onLoad: function(){
            var win = S.client.isIE
                ? document.getElementById(this.id).contentWindow
                : window.frames[this.id];
            win.location.href = this.floc; // set the iframe's location
        }
    };
})(Shadowbox);

