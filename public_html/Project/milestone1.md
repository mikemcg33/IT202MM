<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Michael McGillycuddy (mkm)</td></tr>
<tr><td> <em>Generated: </em> 4/11/2023 10:45:22 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/mkm" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231271294-a1047e6a-4057-4901-8f9b-6cc3ea17e81b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1, invalid email validation, user entered email without @ symbol in improper format.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231271331-9a5621d7-af05-408d-8e49-1f5de8735094.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#2, invalid password validation, user entered password that was less than 8 characters<br>long.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231271859-038361f1-0ece-4e18-bee0-c968a433e5e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#3, passwords do not match validation, the passwords that were entered were not<br>the same as each other.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231271403-5455e149-4218-428a-bfd4-c926112b7754.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#4, email not available validation, the email that was entered had already been<br>registered before.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231272074-bb9a3ef5-6cde-44b9-b229-b439d0c7dca4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#5, username not available validation, the username that was entered has already been<br>taken.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231271523-21992515-d077-4f6e-9723-7821d309fb72.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#6, form shown with valid data BEFORE submission, after submission it shows that<br>the registration was a success.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231273040-bff7c90c-7285-4ef1-a4b7-fd13ffdd3d99.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1, the valid user data from task 1 is present in the final<br>row of the screenshot of the table. It is clearly highlighted in yellow<br>with red arrows pointing at it. If there is still confusion it is<br>id 21.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/18">https://github.com/mikemcg33/IT202MM/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form is handled and behaves through java script and php. When the<br>form is submitted it goes through its validate() function, and if any error<br>occurs, a flash message appears and returns false. However, if the values pass<br>all errors then it returns true and the form is submitted to the<br>server through the post method. Then in php the server checks to see<br>all input values are set correctly and then goes through process of sanitization.<br>Then it goes through validation process and if any errors are encountered with<br>the entered data, a flash message will be provided with the error. Once<br>it passes this it generates a password hash using password_hash() and a BCRYPT<br>algorithm. This data is then entered into the db. The frontend code(js) makes<br>sure the input is not empty, the email is properly formatted, the user<br>is all lowercase, numbers and a few other characters and that the passwords<br>match over 8 characters. The backend code(php) validates the email using the is_valid_email(),<br>the user with the is_valid_username(), and the password with is_valid_password() and is_empty(). If<br>these functions in the sanitize.php don&#39;t return true, then it will not proceed<br>and return a flash message. Again, the password is handled using the password_hash()<br>function which uses a salt to generate a unique hash for passwords entered<br>and stored in the database. This uses the BCRYPT algorithm. The prepare statement<br>successfuly enters the users password, email, and user into the DB and if<br>it is successful, a flash method will notify if it is. This does<br>check duplicates through users_check_duplicate().<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231274267-4b6f6487-c421-4388-ba7e-29536a9cf4ad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1, password mismatch validation. Password doesn&#39;t match what is in the database.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231274758-d1292791-29b4-4be3-b1af-a287522ce15e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#2, validation of non-existing user. Email/user entered does not match one for an<br>existing user. In this case email was not found.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231275885-0497a303-b657-4850-b383-8f8653f2c2c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#2, following login, welcome message appears<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/27">https://github.com/mikemcg33/IT202MM/pull/27</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/25">https://github.com/mikemcg33/IT202MM/pull/25</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form contains two input fields for email/username and password. The email field<br>is of type text and the password field is of type password. The<br>function validate() is following the onsubmit event handler so that it will run<br>client side validation immediately after the form is submitted. If the input fields<br>are valid, the form is properly submitted, if not it will give flash<br>messages. The frontend validation uses the validate function to check if both the<br>email field and passwords field are not empty and to check if the<br>password is over the required length of 8 characters. If the fields are<br>false, then false is returned and a flash message comes up and the<br>form is not submitted. The backend validation is php code that uses the<br>safer echos functions to first sanitize the data then, it will check the<br>email field and the password field to check that they&#39;re not empty and<br>contain the required length of characters. If these are validated using the is_valid_email(),<br>is_valid_username(), is_valid_password() and is_empty() functions found in sanitize.php, then it will continue to<br>submit. Otherwise they will come up with flash error messages. During this login<br>process, the password is taken from the db and is passed through the<br>password_verity() function to determine if the hashed password has been matched to the<br>one entered. The db stores the users data. The getDB()&nbsp; function allows access<br>of the db. The prepare function prepares the SQL query to be executed<br>later, execute executes the prepare statement and uses the fetch function to get<br>data. The SESSION array carry&#39;s user roles.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231276699-818d4819-9cbd-4481-aa0b-ed0b067bac3f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1, after clicking the logout option in the navigation bar, it gives message<br>saying that user was successfully logged out.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231277222-600a5f36-1da0-4fe9-9b7d-a9300f4c7b09.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1, when clicking the back button after logging out, user gets message that<br>they must be logged in to view page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/19">https://github.com/mikemcg33/IT202MM/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>A session allows for scripts to store data for a different user each<br>time it is used. The session_start() function will start a new session. When<br>a user successfully logs in the session updates with their data and the<br>session flags the user data so that it can be refered to from<br>anywhere while the session is running. The reset_session() on the other hand will<br>be called when the user logs out and is useful in unseting the<br>session data for that user. Therefore it makes sure that user data is<br>updated so that it can be accessed when a session is running and<br>destroyed when it isn&#39;t.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231277222-600a5f36-1da0-4fe9-9b7d-a9300f4c7b09.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1, again, once the user clicks logout, the user cannot redirect to the<br>previous page that required you to be logged in.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231280333-4fd9d2c5-7d6c-4a45-bc61-587f8483efbf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1, when i try to direct to admin/create_role.php, it gives an error message<br>saying that the current user does not have permission to view the page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231281033-93810e1b-0f18-4367-9141-dcb42b3d3eb4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1, this is the roles database which shows all the roles that have<br>been created. The only one in thsi table that matters right now is<br>admin, as the other ones were just created as a test. The admin<br>role is in id 1.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231281106-7dd0a53d-630a-4094-b906-5f79e0ba5ac2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1, this is the user roles database. To test it, I assgned two<br>user roles. The only one that matters is the one in the first<br>row(id 1). This user has username michaelmcgillycuddy(user_id 2) and takes on the role<br>of admin(role_id 1).<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/26">https://github.com/mikemcg33/IT202MM/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>When a user tries to log on to a login-protected page, the server<br>checks whether the user is authenticated to be there or not. If they<br>are not authenticated, they are meant to be redirected to the login page<br>and flashed an error message. A user enters their user/email and password and<br>the server will then check these credentials in the database. If the credentials<br>are valid, like in example if the user is successfully logged in, a<br>session is created for the user and a cookie with a unique identifier<br>is sent to the browser. When the user makes a request like redirecting<br>the page, the cookie is examined to see whether or not the user<br>is authenticated to get to the next page. So in this specific case<br>of login-protected pages it makes sure that the user is logged in before<br>it is given the unique identifier that allows it to navigate. Helper functions<br>can be used to write an error message if the user doesn&#39;t have<br>the credentials to access a role protected page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Role-protected pages are only accessible to those with specific roles assigned to them.<br>The user has to authenticate themself by logging in with their user/email and<br>password. They then get authenticated and a session is created for that user<br>with information about them like their ID, roles, user, password, email and this<br>info is stored in a unique identifier. If the user tries to access<br>a page that only a certain role can access, the server checks it&#39;s<br>unique identifier to see if the user has that role needed. Helper functions<br>can be used to write an error message if the user doesn&#39;t have<br>the credentials to access a role protected page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231283527-7b0d19de-6098-4ea5-b465-8488978a2d14.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Clearly shows styled form specifically in the login screen. Navigation letters are larger,<br>Input is aligned vertically. UI is clean<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231283528-4e8edd65-47fb-413b-a6e8-780c0a893894.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Clearly shows styled form specifically in the profile screen. Navigation letters are larger<br>and in line, input boxes aligned vertically, UI is clean.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231283530-6ace8713-cfeb-4a85-bc20-d43b4da37a2c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Clearly shows styled form specifically in the list roles screen. Table of roles<br>is in an organized neat fashion. All previously mentioned styles are still applied.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231283531-3b603b93-75e4-41b8-9e85-6bfd94c5068b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Clearly shows styled form specifically in the assign roles screen. Table of roles<br>is in an organized neat fashion. All previously mentioned styles are still applied.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/27">https://github.com/mikemcg33/IT202MM/pull/27</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>The background colors still remain the same for alerts as green for success,<br>yellow for warning, red for danger, and info in teal. The navigation items<br>are an inline list, with a yellow background behind each one, and a<br>font size large. The items in this list are written in black text.<br>Input boxes have a border radius of 0 as to get rid of<br>bad css and oval-shaped input boxes. Form elements are in a column with<br>input items to the left(the start). This makes them appear inline under the<br>respective fields. Having the label elements in a row with space between allows<br>the tables to be generated to look nice. Finally, I changed the background<br>color(the body) to be white so it is visible.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231277222-600a5f36-1da0-4fe9-9b7d-a9300f4c7b09.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Flash &quot;error&quot; message that shows that once user is logged out, they cannot<br>view a previous page that they had access to before.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231271403-5455e149-4218-428a-bfd4-c926112b7754.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Flash &quot;error&quot; message that shows that an email that was entered during registration<br>is already in use.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231272074-bb9a3ef5-6cde-44b9-b229-b439d0c7dca4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Flash &quot;error&quot; message that shows that a user that was entered during registration<br>is already in use.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/21">https://github.com/mikemcg33/IT202MM/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>Flash messaging is used to replace echo statements to take technical messages and<br>convert them into user-friendly ones. When a user takes action on a website,&nbsp;<br>the website then validates the info and plans its next step. When an<br>error occurs during this process, it generates an error message that is difficult<br>for users to understand. Therefore, by using Flash, we turn it into a<br>user-friendly version where they can understand what the error is. They are temporary<br>messages that last a short amount of time and reload when the user<br>resubmits the form. The flash can have a color associated with the message<br>that its passing through to notify the user of what degree of importance<br>the message is(success, warning, failure). We added the flash file where it was<br>needed.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231286827-df4b0fae-3a91-475a-b630-ee808ec4ed8f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Once logged in, this shows the user profile page in which the email<br>and the username are already properly prefilled for the user.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/22">https://github.com/mikemcg33/IT202MM/pull/22</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The data is retrieved by using get user email and get username and<br>these two fields are already preset in their respective input boxes. Basically the<br>way that it works is that the user enters their current password and,<br>if the value for current password is equal to the value that they<br>entered then the password and confirm password in which they entered will be<br>the same. It starts by getting the value entered for new password and<br>confirm password, if these passwords don&#39;t match, it will send a flash warning<br>to the user. In this case the form won&#39;t reset and the data<br>will not be updated. If the passwords are the same though, it is<br>going to retrieve information for email, user and id, at the location in<br>the db where the db match. We have to update the session with<br>the new data. Also once checking that the current password is correct, it<br>will update the new password in the database. All in all, this is<br>going to show the updated email and username displayed in the form.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231318269-c890eb17-2d50-4bab-84dc-954b257cfe8c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing username validation message, current username is already in use.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231318270-7ed17ff5-ba33-4d9a-8d2a-8edda091ce11.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing email validation message, current email is already in use.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231318271-1e260948-bb8a-4e1e-b3ed-1df40a44d941.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing password validation message, current password is not entered correctly.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231318273-4d19bd54-dd88-44af-b9ca-ef4360460945.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing password mismatch message. The passwords that were entered are not the same<br>which yields a password mismatch message.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231318274-7106295e-5095-4dc2-b4a3-5c0d76597c90.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing username already in use message. The username that has been entered has<br>already been taken.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231319288-3c0690f2-4b62-41ec-b6d4-b2597846546d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the before screenshot of my user table before any edits. I<br>am working with the user in the last row with id 21 that<br>is clearly highlighted in yellow. I am going to be changing the password<br>so notice the password hash change in the next screenshot.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231319287-c606c561-066e-4b67-b057-fdea4d430a9e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the after screenshot of my user table after the edits. I<br>am still working with the user in the last row with id 21<br>that is clearly highlighted in yellow. I changed the password, so the password<br>hash appears different. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/25">https://github.com/mikemcg33/IT202MM/pull/25</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The script checks first if the user clicked the update profile button, then<br>it gets email and username using the se function and sanitizes and validates<br>these values. If there is an error validating these values it will send<br>a flash message error otherwise the users email and username is updated. It<br>then selects the data from db and stores it in $_SESSION so that<br>the current users information is reflected. It updates the password by taking the<br>input values for the current password, new password, and confirm password, by using<br>the se(). The script validates the new password using the is_valid_password(). If new<br>password is valid it checks if the passwords are matched. Once they are<br>matched, it takes the password hash from db and checkd to see if<br>current password matches using password_verify(). If they match the db is updated with<br>this new password and a success message is printed or else it won&#39;t<br>be added and a warning message is printed.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231333623-905ab8b2-1fca-4e7d-86d1-c9d6c6b15169.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the first half of my project board, it shows that the<br>first 5 issues are done and closed.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/231333625-c11fcbb3-b891-479a-9324-930fd03777b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the second half of my project board, it shows that the<br>final 4 issues are done and closed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/mikemcg33/projects/3/views/1">https://github.com/users/mikemcg33/projects/3/views/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mkm33-prod.herokuapp.com/Project/login.php">https://mkm33-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/mkm" target="_blank">Grading</a></td></tr></table>