function initAuth(callback){
  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      // User is signed in.
      var displayName = user.displayName;
      var email = user.email;
      var emailVerified = user.emailVerified;
      var photoURL = user.photoURL;
      var isAnonymous = user.isAnonymous;
      var uid = user.uid;
      var providerData = user.providerData;
      // ...

      if(callback){
        callback();
      }
    } else {
      // User is signed out.
      // ...
      console.log('signed out');
      window.location.href = 'login.html';
    }
  });
}

function signOut(){
  firebase.auth().signOut();
}

function getParam(param){
  var url = new URL(window.location.href);
  return url.searchParams.get(param);
}
