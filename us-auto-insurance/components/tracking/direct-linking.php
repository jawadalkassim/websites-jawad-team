<?php

if($_GET['oid'] && $_GET['cpid']){
    
?>

<script>
function updateHiddenInputs(className,value) {
	var hiddenInputs = document.getElementsByClassName(className);
	for (var i = 0; i < hiddenInputs.length; i++) {
		hiddenInputs[i].setAttribute("value", value);
	}
}
</script>

<meta http-equiv="delegate-ch" content="sec-ch-ua https://trk.loanz.com; sec-ch-ua-mobile https://trk.loanz.com; sec-ch-ua-arch https://trk.loanz.com; sec-ch-ua-model https://trk.loanz.com; sec-ch-ua-platform https://trk.loanz.com; sec-ch-ua-platform-version https://trk.loanz.com; sec-ch-ua-bitness https://trk.loanz.com; sec-ch-ua-full-version-list https://trk.loanz.com; sec-ch-ua-full-version https://trk.loanz.com"><style>.dtpcnt{opacity: 0;}</style>
<script>
    (function(c,a,f,q,b,m,r,g,h,k,d,n,e,p){p="https:"===c.location.protocol?"secure; ":"";c[b]||(c[b]=function(a){c[b].state.callbackQueue.push(a)},c[b].state={callbackQueue:[]},c[b].registerConversion=function(a){c[b].state.callbackQueue.push(a)},function(){(k=/[?&]cpid(=([^&#]*)|&|#|$)/.exec(c.location.href))&&k[2]&&(d=k[2],n=a.cookie.match(new RegExp("(^| )vl-"+d+"=([^;]+)")));var b=a.cookie.match(/(^| )vl-cid=([^;]+)/),l;"savedCid"!==r||!b||d&&"undefined"!==typeof d||(l=b.pop());g=a.createElement("script");
h=a.scripts[0];g.src=m+(-1===m.indexOf("?")?"?":"&")+"oref="+f(a.referrer)+"&ourl="+f(location[q])+"&opt="+f(a.title)+"&vtm="+(new Date).getTime()+(l?"&cid="+l:"")+(n?"&uw=no":"");h.parentNode.insertBefore(g,h);d&&(e=new Date,e.setTime(e.getTime()+864E5),a.cookie="vl-"+d+"=1; "+p+"samesite=Strict; expires="+e.toGMTString()+"; path=/")}())})(window,document,encodeURIComponent,"href","dtpCallback","https://trk.loanz.com/d/.js","savedCid");

dtpCallback(() => {
    //console.log(dtpCallback);
    var clickId = dtpCallback.getClickID();
    console.log(clickId);
    updateHiddenInputs('hidden-vclid', clickId);
});

</script>
<noscript><link href="https://trk.loanz.com/d/.js?noscript=true&ourl=" rel="stylesheet"/></noscript>

<script type="text/javascript" src="https://www.c2fvhdtrk.com/scripts/sdk/everflow.js"></script>

<script>

window.onload = function () {

    console.log('voluum/everflow');

    var attempts = 0;
    var maxAttempts = 20;
    var intervalTime = 500;

    function checkForClickId() {

        var clickId = document.getElementById('hdn_vclid').value;

        console.log(attempts);

        if (clickId) {
            
            initiateEverflowClick(clickId);
            clearInterval(intervalId);

        } else {
            
            attempts++;

            if (attempts >= maxAttempts) {
                initiateEverflowClick();
                clearInterval(intervalId);
            }
        }

    }

    var intervalId = setInterval(checkForClickId, intervalTime);

}

function initiateEverflowClick(clickId){
    
    //var offerId = EF.urlParameter('oid'),
    var offerId = EF.urlParameter('ef_oid'),
    previousTransactionId = EF.getTransactionId(offerId);

    //console.log('cid: ' + clickId);
    //console.log('tid: ' + previousTransactionId);

    if (!EF.urlParameter('_ef_transaction_id')) {
        
        //console.log('0');
        
        EF.click({
            offer_id: offerId,
            affiliate_id: EF.urlParameter('aid'),
            sub1: EF.urlParameter('sub1'),
            sub2: EF.urlParameter('sub2'),
            sub3: EF.urlParameter('sub3'),
            sub4: EF.urlParameter('sub4'),
            sub5: EF.urlParameter('sub5'),
            uid: EF.urlParameter('uid'),
            source_id: clickId,
        }).then((transactionId) => {
            updateHiddenInputs('hidden-tid', transactionId);
        });

    }

}

</script>

<?php
} else if($_GET['oid'] && !$_GET['tid']){
?>

<script type="text/javascript" src="https://www.c2fvhdtrk.com/scripts/sdk/everflow.js"></script>

<script>

console.log('everflow');

function updateHiddenInputs(className,value) {
	var hiddenInputs = document.getElementsByClassName(className);
	for (var i = 0; i < hiddenInputs.length; i++) {
		hiddenInputs[i].setAttribute("value", value);
	}
}

var offerId = EF.urlParameter('oid'),
previousTransactionId = EF.getTransactionId(offerId);

if (!EF.urlParameter('_ef_transaction_id')) {
    
    console.log('0');
    
    EF.click({
        offer_id: offerId,
        affiliate_id: EF.urlParameter('aid'),
        sub1: EF.urlParameter('sub1'),
        sub2: EF.urlParameter('sub2'),
        sub3: EF.urlParameter('sub3'),
        sub4: EF.urlParameter('sub4'),
        sub5: EF.urlParameter('sub5'),
        uid: EF.urlParameter('uid'),
        source_id: EF.urlParameter('source_id'),
    }).then((transactionId) => {
        updateHiddenInputs('hidden-tid', transactionId);
    });

}

</script>

<?php
}
?>