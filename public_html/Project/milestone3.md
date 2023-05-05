<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Michael McGillycuddy (mkm)</td></tr>
<tr><td> <em>Generated: </em> 5/5/2023 10:19:23 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-3-bank-project/grade/mkm" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236364913-f867cdea-3134-4f0e-8046-5765543bae49.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows transfer page with &quot;Internal Transfer&quot; heading.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236366002-56282022-07c2-4d22-9891-7846476f77ff.jpg"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of the second drop down bar with account number and current balance,<br>along with account type of the losing account. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236366070-f1c38ca3-09cf-4278-a6e1-f847d3e62f6f.jpg"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image of the firdt drop down bar with account number and current balance,<br>along with account type of the sending account. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236366574-266cfd25-3e16-450a-b02e-b7f2d2d36de8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user can&#39;t transfer more funds than they have.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236366778-ec7787e8-094a-4c33-b744-40a26d1dbd25.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user can&#39;t transfer to the same account.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236366913-6e934d5b-2c55-4109-9eec-70c7249a767f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the code that prevents user from transferring to the same account.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236367151-a1072872-00cb-499a-9568-beb4fb9a4dce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user can&#39;t transfer a negative balance.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236367343-c38ff836-6a71-482a-8769-bda7a9092064.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the code that prevents the user from transferring a negative balance.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236367744-a720e16a-ca2e-4c23-a393-cd0ceb6029d3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows generated transaction history from the db. Final two rows show transfer, id&#39;s<br>15 and 16, highlighted in yellow. Shows 3 dollars coming from src and<br>going to dest account.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236368200-ec2e8596-49fb-4ffd-b621-753ddf798188.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows Accounts table with both affected accounts from the db. Id&#39;s 24 and<br>25, highlighted in yellow. Shows accurate balance in each account(17 in checking, 13<br>in savings) following 3 dollar transfer.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <p>The code flow of a transfer fetches account details using dropdowns. It fetches<br>the account details from the DB and lists them in dropdowns for the<br>user to choose their sender account and receiver account. When the user selects<br>the sender and receives accounts, the balances of each account are fetched from<br>the DB, and the expected total amount is calculated after the transfer. It<br>calculates the expected total by adding the amount of the transfer to the<br>sender&#39;s account balance and subtracting it from the receiver&#39;s account balance. The two<br>transaction records are calculated and inserted with their transfer amount, sender and receiver<br>ids, and modified time. Finally, the account balances of both accounts are found<br>by subtracting the transfer amount from the sender&#39;s balance and adding it to<br>the receiver&#39;s balance.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/66">https://github.com/mikemcg33/IT202MM/pull/66</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mkm33-prod.herokuapp.com/Project/internal_transfer.php">https://mkm33-prod.herokuapp.com/Project/internal_transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236368914-5b22f485-f617-4933-887e-d4c4a4663572.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows transaction history page showing new transfer transaction highlighted in yellow.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236369400-35edb3d1-a9df-44b3-8371-0d24d2d56237.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows pagination and filtering by Account Number from lowest to highest. Shows first<br>page (3 max on each page, 5 total accounts, 2 pages).<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236369401-c5f9ccaa-d552-4a3a-9fd1-e38695bc5d86.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows pagination and filtering by Balance from highest to lowest. Shows first page<br>(3 max on each page, 5 total accounts, 2 pages).<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236369402-121f8e17-70ed-4b53-bdf3-65c339e76207.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows pagination and filtering by Balance from highest to lowest. Shows second page<br>(3 max on each page, 5 total accounts, 2 pages).<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236369403-58753a90-6b44-4c1f-94f0-92b7407dfc3b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows pagination and filtering by Account Type. Unlike the previous three examples, I<br>type in the account type (in this case checking) and it only shows<br>results for checking accounts. These accounts are filtered by Account Number from lowest<br>to highest. There is only 1 page because only two checking accounts, no<br>need for 2 pages. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>Filters work by taking large data and narrowing it down to smaller data.<br>Users will be able to choose these filters so that they could see<br>the data that they want to see. Pagination works by taking data and<br>dividing it into pages so that users can navigate using buttons and links.<br>Sorting works by using a form to hold search criteria and processes the<br>$_GET variables using the se() function. The query is built dynamically instead of<br>statically. The user will be able to modify data and in what order<br>they want to use an inline form with dropdowns. The values of this<br>form are sanitized and validated then passes to the query through binding and<br>directly. For pagination, the paginate() function and the Pagnation.php files are used. The<br>main variables associated with this are page, per_page, offset, and total pages. Two<br>queries are involved to get the total items and to get the records.<br>The search filters are maintained when pagination is completed. In this, the page<br>number is passed through the get variable, and it is used to determine<br>the offset for the query by calculating per page*(page-1) with per page having<br>the number of data rows and the page being the current page. Filters<br>and sorting are provided with pagination, because when we pass along the filter<br>data, it is used in our query building and the results get limited<br>to the records on the current page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/68">https://github.com/mikemcg33/IT202MM/pull/68</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to Transaction History page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mkm33-prod.herokuapp.com/Project/accounts.php">https://mkm33-prod.herokuapp.com/Project/accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236370761-5b0d5b39-c134-4e61-b8a8-834fafcc3cd6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user&#39;s profile first name and last name, values are not empty.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/67">https://github.com/mikemcg33/IT202MM/pull/67</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mkm33-prod.herokuapp.com/Project/profile.php">https://mkm33-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236372721-f6dbcc7a-eb71-4735-b8f3-468deef96908.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows transfer page with &quot;External Transfer&quot; heading.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236373057-11280a22-5fed-4187-9b5a-248b6052f2eb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user can&#39;t send more money than they have in their account. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236373358-4ec4a527-a2a2-45a3-a255-fdd68c7a81bd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code showing where user can&#39;t send more money than they have in their<br>account. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236373579-9c9ac68c-e4e5-440f-a27e-b12ac54e2422.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user can&#39;t send negative amount.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236373709-3aad4bc6-1c46-4803-a03e-bd9560ed0978.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code showing that the user can&#39;t send a negative amount.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236375299-02bb1962-0774-4927-9807-98dccbd92939.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows message that user was not found according to their account number.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236375302-b0505217-afb6-4f8a-848e-04c6f710a863.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows message that user was not found according to their last name.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236375303-fc1be682-0de6-4be4-bb6c-7fabb830493d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code that sends error message if user account number entered not found and<br>if user last name not found.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236376005-400ab986-5389-4747-8506-25b1dbe3e702.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows generated transaction history from the db. Final two rows show transfer, id&#39;s<br>19 and 20, highlighted in yellow. Shows 4 dollars coming from src and<br>going to dest account.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236376688-536ab689-8059-41ca-844f-fc19adac8d95.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows Accounts table with both affected accounts from the db. Id&#39;s 23 and<br>24, highlighted in yellow. Shows accurate balance in each account (13 in checking<br>for Smith, 7 in checking for sender) following 4 dollar transfer.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>Looking up the target user begins by identifying the user by their last<br>name by using a prepared statement to get the id from the user&#39;s<br>table where the last name matches. and it fetches where the last name<br>was found in the records. It retrieves the id of the user from<br>the user table. Then it does the same process with finding the account<br>number from the accounts table. It validates by checking if the amount is<br>a positive number, then the from the account must have a balance greater<br>than the amount they are transferring, then the target user&#39;s last name must<br>be from the user&#39;s table and a flash message will generate otherwise, finally,<br>the target user account number must be from the accounts table or a<br>flash message will generate.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/mikemcg33/IT202MM/pull/69">https://github.com/mikemcg33/IT202MM/pull/69</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to external transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mkm33-prod.herokuapp.com/Project/external_transfer.php">https://mkm33-prod.herokuapp.com/Project/external_transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/123041075/236483883-d3246771-cd92-4787-ab1a-be5aa8d43893.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>All issues are closed everything is complete.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-3-bank-project/grade/mkm" target="_blank">Grading</a></td></tr></table>