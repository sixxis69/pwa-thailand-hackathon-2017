var user_displayName = "";
var user_mobile = "";
var user_email = "";
var user_uid = ""

function initAuth(callback){
  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      // User is signed in.
      user_displayName = user.name;
      user_email = user.email;
      var emailVerified = user.emailVerified;
      var photoURL = user.photoURL;
      var isAnonymous = user.isAnonymous;
      user_uid = user.uid;
      var providerData = user.providerData;

      // ...

      firebase.database().ref('/users/' + user_uid).once('value').then(function(snapshot) {
          user_displayName = snapshot.val().name;
          user_mobile = snapshot.val().mobile;

          if(callback){
              callback();
          }
      });


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
