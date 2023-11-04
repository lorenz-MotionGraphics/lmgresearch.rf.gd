### Adding Google Sign-in Option to Your Site

To add Google Sign-in to your website or application, follow these steps:

1. **Create a Google API Console project:**

   Go to the [Google API Console](https://console.developers.google.com/) and create a new project.

2. **Enable the Google Sign-in API:**

   In the API & Services page, go to the Library tab and search for "Google Sign-in". Enable the API by clicking on it.

3. **Create a Google OAuth 2.0 client ID:**

   On the Credentials page, click on the Create Credentials button and select OAuth client ID. Choose Web application as the application type. Enter a name for your client ID and click Create.

4. **Add the Google Sign-in button to your web page or app:**

   Obtain the code for the Google Sign-in button from [Google Developers website](https://developers.google.com/identity/sign-in/web/build-button).

5. **Initialize the Google Sign-in client:**

   Add the following code to your web page or app:

   ```javascript
   gapi.load('auth2', function() {
     gapi.auth2.init({
       client_id: 'YOUR_CLIENT_ID',
     });
   });
   ```

   Replace `YOUR_CLIENT_ID` with the client ID you obtained in step 3.

6. **Sign in the user:**

   To sign in the user, utilize the following code:

   ```javascript
   gapi.auth2.getAuthInstance().signIn();
   ```

   This will open a popup window where the user can sign in using their Google account.

   Once the user has signed in, retrieve their profile information using the following code:

   ```javascript
   var profile = gapi.auth2.getAuthInstance().currentUser.get().getBasicProfile();
   ```

   You can access the user's name, email address, and profile picture from the `profile` object.

Here's an example of how to add a Google Sign-in button to your web page:

```html
<button onclick="gapi.auth2.getAuthInstance().signIn()">Sign in with Google</button>
```

And here's an example of how to initialize the Google Sign-in client:

```javascript
gapi.load('auth2', function() {
  gapi.auth2.init({
    client_id: 'YOUR_CLIENT_ID',
  });
});
```

Once the client is initialized, you can sign in the user with `gapi.auth2.getAuthInstance().signIn()`. To access the user's profile information, use `gapi.auth2.getAuthInstance().currentUser.get().getBasicProfile()`.

You can then utilize this information for authentication purposes or display the user's profile on your website or app.

Example of displaying the user profile:

```javascript
const profile = gapi.auth2.getAuthInstance().currentUser.get().getBasicProfile();

// Create a new profile object
const userProfile = {
  id: profile.getId(),
  name: profile.getName(),
  email: profile.getEmail(),
  imageUrl: profile.getImageUrl(),
};

// Display the user profile
const profileDiv = document.querySelector('#profile');
profileDiv.innerHTML = `
  <h1>${userProfile.name}</h1>
  <img src="${userProfile.imageUrl}" alt="${userProfile.name}'s profile picture">
  <p>Email: ${userProfile.email}</p>
`;
```

This will create a div element with the ID `profile` and display the user's name, profile picture, and email address within it.

I hope this revised content meets your requirements in terms of being readable and compatible with GitHub markdown. Let me know if there's anything else I can assist you with!
