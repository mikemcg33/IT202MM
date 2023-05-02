<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Bank Project</td></tr>
<tr><td> <em>Student: </em> Michael McGillycuddy (mkm)</td></tr>
<tr><td> <em>Generated: </em> 5/2/2023 4:36:50 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-bank-project/grade/mkm" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Create Accounts table and setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot from the db of the system user (Users table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235726220-70df359b-6fab-4b94-8f6a-35aebf37800b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows system user at id -1, clearly highlighted in yellow at the top<br>of the table. Does not use real username (contains caps), password isn&#39;t a<br>valid hash.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot from the db of the world account (Accounts table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235726801-0b7b5a0f-bf3c-4423-93bd-585fae635ce1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows world account at id -1, clearly highlighted in yellow at the top<br>of the table. Account number is 000000000000, type world, and associated with system<br>user by id value.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain the purpose and usage of these two entries and how they relate</td></tr>
<tr><td> <em>Response:</em> <p>The purpose of using a world account and a system user is so<br>that each deposit and withdrawal has a proper pair. When a user enters<br>a deposit, that amount is taken out of the world account and entered<br>into the user&#39;s acount so that the same amount that is being put<br>into the users account is being taken out of the worlds account. The<br>world account and the system user relate through their id of -1. As<br>if any other user in the user table had an account in the<br>account table that is associated with their user _id, the system user in<br>the user table has an account in the account table that is associated<br>with the user id -1 and has values so that no one can<br>log in and access the world account.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/52">https://github.com/mikemcg33/IT202MM/pull/52</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/53">https://github.com/mikemcg33/IT202MM/pull/53</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Dashboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the requested links/navigation</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235736546-ea24956a-c143-44be-8dc6-2d01d8fedd0d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of dashboard page showing requested links that navigate to profile, list accounts,<br>create account, deposit, withdraw, and log out pages.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain which ones are working for this milestone</td></tr>
<tr><td> <em>Response:</em> <p>All the links on the dashboard are working, however, the only ones applicable<br>to this milestone are Create Account, List Accounts, Deposit, and Withdraw. There are<br>no dummy links but there will be a link added in a future<br>milestone for money transfers. The Create Account page has the purpose of allowing<br>the logged-in user to select an account type from a drop-down menu and<br>insert an initial deposit to deposit into that account. Once the page submits,<br>it creates a new account for that user. The List Accounts page has<br>the purpose of displaying information on all the user&#39;s created accounts in a<br>list. The information shows the user the account type, account number, balance, and<br>modified time related to each account. Next to each account has a link<br>transaction history that takes the user to a page that shows them an<br>organized table of that account&#39;s information, and a transaction history table that shows<br>all the transactions completed with that account. The Deposit and Withdraw pages both<br>have similar purposes. The deposit page allows the user to select one of<br>their accounts and deposit an entered amount of money into that account along<br>with an entered memo that will be recorded in the transactions history table.<br>The withdraw page allows the user to select one of their accounts and<br>withdraw an entered amount of money into that account along with an entered<br>memo that will be recorded in the transactions history table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/55">https://github.com/mikemcg33/IT202MM/pull/55</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Create a checking Account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Create Account Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235730074-e68c5a55-f23b-45eb-a62b-48594066d7c0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows create account page, with valid data filled in on the form for<br>creating a checking account.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing validation errors and success message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235737533-51eef061-4043-439a-ac3d-8a799a0399ab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows success message from task 1&#39;s data.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235737869-a6796b4c-70b2-4cf6-8eb9-822d2e4575a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows minimum funding validation when a value of 4 is entered as deposit<br>amount(minumum 5).<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the transaction generated from the initial deposit (from the DB)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235738441-800791f2-7b71-439b-b8cf-a4d6ef8493bf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows transaction generated from initial deposit in my Money History table from the<br>DB. Shows two records showing the positive and negative movement of funds between<br>the world account (located at id -1) and the account created in task<br>1(located at id 17). Shows a difference or +5 and -5 moving in<br>and out of accounts. Generates a default memo when initial deposit is made.<br>Shows time created and modified. Shows expected_total following the initial deposit of 5<br>dollars(-5.00 in the world account, 5.00 in checking account) <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235739946-c8cf7afa-8713-406d-94ee-5a60b09501d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows Accounts table following transaction generated from initial deposit. I am highlighting the<br>first element in the table at id -1 highlighted in yellow. It is<br>important to look at the balance column. When 5 dollars was deposited into<br>the checking account from sub task 1, it took out 5 dollars from<br>the balance of world account. This is evident because the balance of the<br>world account is now -5.00.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235740004-2f099044-acab-4f1e-87ed-7e872972ba4c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows Accounts table following transaction generated from initial deposit. I am highlighting the<br>last element in the table at id 17 highlighted in yellow. It is<br>important to look at the balance column. 5 dollars was deposited into the<br>balance of the checking account with account number 000000000017. This is evident because<br>the balance of checking account is now 5.00.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain which account number generation you used and the account creation process including the transaction logic</td></tr>
<tr><td> <em>Response:</em> <p><span style="font-size: 13px;">Option 2: Generate the number based on the id column; this<br>requires inserting a null first to get the last insert id, then updating<br>the record immediately after. The account number is generated based on the id<br>column for a user in the accounts table. When creating a new account,<br>the account number is first inserted as null in the account number&nbsp;column. Then<br>lastInsertID() gets the id of the new record and is left padded with<br>zeros up to a length of 12 using str_pad() function. Finally, it updates<br>the account number with the new 12-digit&nbsp;account number. Creating a new account checks<br>if the form is submitted, then retrieves the account type and deposit amount<br>that was entered, and also checks if the deposit amounts are at least<br>5 dollars. If it is, it uses get_user_id() of the logged-in user and<br>inserts into the accounts table user_id, account_type, and the id using lastInsertID(). Then<br>transactions() are called passing the deposit amount, reason for a deposit, -1 from<br>the losing account, the new account id as gaining account, and an initial<br>deposit memo. When a transaction finishes, the user is redirected back to the<br>create account page.</span><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/52">https://github.com/mikemcg33/IT202MM/pull/52</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/53">https://github.com/mikemcg33/IT202MM/pull/53</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mkm33-prod.herokuapp.com/Project/create_account.php">https://mkm33-prod.herokuapp.com/Project/create_account.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to list their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's account list view (show 5 accounts)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235742831-9641a4f0-6f95-4032-a037-ed42a08100cb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user&#39;s account list view. Shows 5 different accounts created for that user.<br>Each account shows account type, account number, balance and time modified. Additionally, there<br>is a transaction history link next to each account that brings the user<br>to a separate page that includes a table of that account&#39;s details, and<br>a transaction history table for that account. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the page is displayed and the data lookup occurs</td></tr>
<tr><td> <em>Response:</em> <p>All the accounts are fetched that are associated with the logged-in user from<br>the DB using PDO prepared. It passes the user&#39;s id as a parameter.<br>The data goes in the accounts variable, and for each loop goes through<br>this array variable and displays all the information on the webpage using HTML<br>tags. It displays account type, account number, balance, and modified time. Each account<br>also has a link for the transaction history of that account. It uses<br>get_url() with the account_id so that the transaction history page generates the transaction<br>history for that specific account.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/52">https://github.com/mikemcg33/IT202MM/pull/52</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/53">https://github.com/mikemcg33/IT202MM/pull/53</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mkm33-prod.herokuapp.com/Project/accounts.php">https://mkm33-prod.herokuapp.com/Project/accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Account Transaction Details </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of an account's transaction history</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235745640-4bb898c3-b872-4161-b689-95942ae7744a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows transaction history details. It includes a few samples of deposits and withdrawals<br>including the initial deposit. Once I clicked the Transaction History link on the<br>List Accounts page, it brings me to this page. This page includes an<br>account information table which is a table showing the information of that account<br>including account number, account type, balance, and time created. Then there is a<br>transactions history table showing all the transactions completed under this account number starting<br>with the first initial deposit of 5 dollars. The transactions table has data<br>for the src/dest account numbers, the transaction type, the change in balance, when<br>it occurred, the memo, and the expected total. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the lookup and display occurs</td></tr>
<tr><td> <em>Response:</em> <p>The display is meant to show account information and the transaction history table<br>of transactions related to that account. I first get the account id and<br>use a query to retrieve the account information from the Accounts table for<br>wherever the account id matches. When successful, the data is formatted on the<br>webpage using HTML and CSS. Another query is used to get the transaction<br>history of the account from Money_History table. The query selects all fields of<br>src/dest, the transaction type, the change in balance when it occurred, the memo,<br>and the expected total from this table and uses two LEFT JOIN to<br>join the Accounts table, once for src account and once for dest account.<br>WHERE filters the transaction for the account id where src or dest is<br>equal to the account id. This data is ordered by the id of<br>the Money_History table. When successful, the data is formatted on the webpage using<br>HTML and CSS.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/54">https://github.com/mikemcg33/IT202MM/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mkm33-prod.herokuapp.com/Project/transaction_history.php?account_id=17">https://mkm33-prod.herokuapp.com/Project/transaction_history.php?account_id=17</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Deposit/Withdraw </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a Screenshot of the Deposit Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235752765-bd2b1ecd-9914-4419-bf03-8152dead6362.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows valid data filled into the deposit page before submit. Page includes drop<br>down where I select one of the logged in users accounts. The drop<br>down shows that users accounts and balances. The page also includes text box<br>to input desired amount to deposit and a text box to input memo.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a Screenshot of the Withdraw Page (this potentially can be the same page with different views)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235754215-e7fc1bb0-ce84-4e7d-bb7b-0906ad005737.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows valid data filled into the withdraw page before submit. Page includes drop<br>down where I select one of the logged in users accounts. The drop<br>down shows that users accounts and balances. The page also includes text box<br>to input desired amount to withdraw and a text box to input memo.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show validation error for negative numbers</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235755307-0255b52a-1e28-4a42-a0c7-6be4558280ba.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Validation error for deposit negative number.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235755527-e2480485-e0b0-4ed1-a535-ed45a9e3afff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Validation error for withdraw negative number.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Show validation error for withdrawing more than the account contains</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235755799-2ffa45b5-63e0-4a42-8cfb-8b41f4ec00e3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Validation error for withdrawing more than account contains &quot;insufficent balance&quot;.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Show a success message for deposit and withdraw (2 screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235753822-a294a5da-1c67-4b77-85c1-62682a4f0ee0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows deposit success.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235754627-a87b46f8-1256-4904-b6fb-6bf40cd7c6ff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows withdrawal success.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Show a screenshot of the transaction pairs in the DB for the above tests</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235756591-9afac93c-073b-4393-bcdb-cb8256da6951.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows transaction pairs in the DB for the above test of depositing 2<br>and withdrawing 3. The final 4 rows are highlighted yellow (id&#39;s 17-20). Id&#39;s<br>17 and 18 show the transaction pair for the deposit of 2 dollars.<br>Id&#39;s 19 and 20 show the transaction pair for the withdraw of 3<br>dollars. Expected total is updated in each transaction pair with a difference of<br>2 in the deposit pair and a difference of 3 in the withdraw<br>pair.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain how transactions work</td></tr>
<tr><td> <em>Response:</em> <p>My transactions file and function handle transactions between two accounts. It first checks<br>if the amount is greater than zero. Then a query is prepped to<br>insert two transaction records into the Money_History table. The first is the money<br>taken from the losing account. The second is the money added to the<br>gaining account. Placeholders in query are used in filled with data from the<br>function&#39;s arguments. get_balance calculates the expected total after a transaction. I then get<br>the DB and execute the query. The refresh_account_balance function is used to update<br>the account balance. It takes in the account id, once for losing and<br>once for gaining. and updates the balance by summing the diff column in<br>Money_History with the account balance.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/54">https://github.com/mikemcg33/IT202MM/pull/54</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mkm33-prod.herokuapp.com/Project/deposit.php">https://mkm33-prod.herokuapp.com/Project/deposit.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mkm33-prod.herokuapp.com/Project/withdraw.php">https://mkm33-prod.herokuapp.com/Project/withdraw.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) </td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235779306-b1f4e3b2-0d4a-4072-a9a3-23ce4683902a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Nothing should be incomplete up to this point.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/235779308-d90a9972-cf26-4cd0-a765-d8ee12d5d241.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Nothing should be incomplete up to this point.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-bank-project/grade/mkm" target="_blank">Grading</a></td></tr></table>