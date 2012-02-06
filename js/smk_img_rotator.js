
function smk_img_Rotator(rObj) {
    var imgObj = document.getElementById(rObj.id);
    if ( !imgObj || !rObj.images ) { return; }
    this.id = rObj.id; this.speed = rObj.speed || 4500;
    this.path = rObj.path || ""; this.bRand = rObj.bRand; this.bMouse = rObj.bMouse;

    this.bTrans = rObj.bTrans && typeof imgObj.filters != 'undefined';
    this.actions = rObj.actions; this.captions = rObj.captions; this.captionId = rObj.captionId;
    this.title = rObj.title; this.alt = rObj.alt;
    this.ctr = rObj.num || 0; // getRandom fn sets num
    this.timer = 0; this.imgs = [];
    this.addImages(rObj.images); this._setupLink(imgObj);
    var index = smk_img_Rotator.col.length; smk_img_Rotator.col[index] = this;
    this.animString = "smk_img_Rotator.col[" + index + "]";
}

smk_img_Rotator.col = [];
smk_img_Rotator.resumeDelay = 400;
smk_img_Rotator.prototype.on_rotate = function() {}

smk_img_Rotator.getInstanceById = function(id) {
    var i, obj;
    for (i=0; obj = smk_img_Rotator.col[i]; i++) {
        if ( obj.id == id ) { return obj; }
    }
    return null;
}

smk_img_Rotator.prototype.addImages = function(imgAr) { // preloads images
    var i, img;
    for (i=0; imgAr[i]; i++) {
        img = new Image();
        img.src = this.path + imgAr[i];
        this.imgs[this.imgs.length] = img;
    }
}

// mouse events pause/resume
smk_img_Rotator.prototype._setupLink = function(imgObj) {
    if ( imgObj.parentNode && imgObj.parentNode.tagName.toLowerCase() == 'a' ) {
        var parentLink = this.parentLink = imgObj.parentNode;
        if (this.bMouse) {
            smk_img_Event.add(parentLink, 'mouseover', smk_img_Rotator.pause);
            smk_img_Event.add(parentLink, 'mouseout', smk_img_Rotator.resume);
        }
    }
}

smk_img_Rotator.prototype.rotate = function() {
    this.clearTimer();
    var imgObj = document.getElementById(this.id);
    if ( this.bRand ) {
        this.setRandomCtr();
    } else {
        if (this.ctr < this.imgs.length-1) this.ctr++;
        else this.ctr = 0;
    }
    if ( this.bTrans ) {
        this.doImageTrans(imgObj);
    } else {
        imgObj.src = this.imgs[this.ctr].src;
    }
    this.swapAlt(imgObj); this.prepAction(); this.showCaption();
    this.on_rotate();
    this.timer = setTimeout( this.animString + ".rotate()", this.speed);
}

smk_img_Rotator.prototype.setRandomCtr = function() {
    var i = 0, ctr;
    do {
        ctr = Math.floor( Math.random() * this.imgs.length );
        i++;
    } while ( ctr == this.ctr && i < 6 )
    this.ctr = ctr;
}

smk_img_Rotator.prototype.doImageTrans = function(imgObj) {
    imgObj.style.filter = 'blendTrans(duration=1)';
    if (imgObj.filters.blendTrans) imgObj.filters.blendTrans.Apply();
    imgObj.src = this.imgs[this.ctr].src;
    imgObj.filters.blendTrans.Play();
}

smk_img_Rotator.prototype.swapAlt = function(imgObj) {
    if ( !imgObj.setAttribute ) return;
    if ( this.alt && this.alt[this.ctr] ) {
        imgObj.setAttribute('alt', this.alt[this.ctr]);
    }
    if ( this.title && this.title[this.ctr] ) {
        imgObj.setAttribute('title', this.title[this.ctr]);
    }
}

smk_img_Rotator.prototype.prepAction = function() {
    if ( this.actions && this.parentLink && this.actions[this.ctr] ) {
        if ( typeof this.actions[this.ctr] == 'string' ) {
            this.parentLink.href = this.actions[this.ctr];
        } else if ( typeof this.actions[this.ctr] == 'function' ) {
            var id = this.id;
            this.parentLink.href = "javascript: void " + this.actions[this.ctr] + "('" + id + "')";
        }
    }
}

smk_img_Rotator.prototype.showCaption = function() {
    if ( this.captions && this.captionId ) {
        var el = document.getElementById( this.captionId );
        if ( el && this.captions[this.ctr] ) {
            el.innerHTML = this.captions[this.ctr];
        }
    }
}

smk_img_Rotator.prototype.clearTimer = function() {
    clearTimeout( this.timer ); this.timer = null;
}

smk_img_Rotator.start = function(delay) {
    var i, obj;
    for (i=0; obj = smk_img_Rotator.col[i]; i++) {
        if ( !obj.isActive ) {
            obj.clearTimer(); obj.isActive = true;
            delay = delay || obj.speed;
            obj.timer = setTimeout( obj.animString + ".rotate()", delay);
        }
    }
}


smk_img_Rotator.stop = function() {
    var i, obj;
    for (i=0; obj = smk_img_Rotator.col[i]; i++) {
        obj.clearTimer(); obj.isActive = false;
    }
}


smk_img_Rotator.pause = function(e) {
    e = smk_img_Event.DOMit(e);
    var id = e.target.id;
    var obj = smk_img_Rotator.getInstanceById(id);
    if (obj) { obj.clearTimer(); }
}

smk_img_Rotator.resume = function(e) {
    e = smk_img_Event.DOMit(e);
    var id = e.target.id;
    var obj = smk_img_Rotator.getInstanceById(id);
    if ( obj && obj.isActive ) {
        obj.timer = setTimeout( obj.animString + ".rotate()", smk_img_Rotator.resumeDelay );
    }
}

smk_img_Rotator.setup = function () {
    var rObj, r;
    for (var i=0; arguments[i]; i++) {
        rObj = arguments[i];
        r = new smk_img_Rotator(rObj);
    }
    smk_img_Rotator.start();
}
