/**
 * UCC Social Media Dashboard Engine
 * Handles decoupled loading of vendor platform SDK scripts safely
 */
document.addEventListener("DOMContentLoaded", () => {
    
    // 1. INITIALISE FACEBOOK JAVASCRIPT SDK
    const initFacebookSDK = () => {
        if (document.getElementById('facebook-jssdk')) return; // Avoid duplicate loading
        
        const firstScript = document.getElementsByTagName('script')[0];
        const fbScript = document.createElement('script');
        
        fbScript.id = 'facebook-jssdk';
        fbScript.async = true;
        fbScript.defer = true;
        fbScript.crossOrigin = 'anonymous';
        fbScript.src = 'https://facebook.net';
        
        firstScript.parentNode.insertBefore(fbScript, firstScript);
    };

    // 2. INITIALISE TWITTER / X TIMELINE WIDGET ENGINE
    const initTwitterEngine = () => {
        if (window.twttr) return; // Vendor system is already prepared globally
        
        const firstScript = document.getElementsByTagName('script')[0];
        const twitterScript = document.createElement('script');
        
        twitterScript.async = true;
        twitterScript.src = 'https://twitter.com';
        twitterScript.charset = 'utf-8';
        
        firstScript.parentNode.insertBefore(twitterScript, firstScript);
    };

    // Fire off initialization workflows sequence safely backgrounded
    initFacebookSDK();
    initTwitterEngine();
});
