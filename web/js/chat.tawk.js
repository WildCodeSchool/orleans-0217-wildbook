/**
 * Created by biovor on 06/06/17.
 */
(function() {function addEventListener(element,event,handler) {
    if(element.addEventListener) {
        element.addEventListener(event,handler, false);
    } else if(element.attachEvent){
        element.attachEvent('on'+event,handler);
    }
}function maybePrefixUrlField() {
    if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
        this.value = "http://" + this.value;
    }
}

    var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
    if( urlFields && urlFields.length > 0 ) {
        for( var j=0; j < urlFields.length; j++ ) {
            addEventListener(urlFields[j],'blur',maybePrefixUrlField);
        }
    }/* test if browser supports date fields */
    var testInput = document.createElement('input');
    testInput.setAttribute('type', 'date');
    if( testInput.type !== 'date') {

        /* add placeholder & pattern to all date fields */
        var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
        for(var i=0; i<dateFields.length; i++) {
            if(!dateFields[i].placeholder) {
                dateFields[i].placeholder = 'YYYY-MM-DD';
            }
            if(!dateFields[i].pattern) {
                dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
            }
        }
    }

})();

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/579a1560bcbba63963f99e6d/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
})();