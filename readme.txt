1. I chose to use the home page (home.php) as the regular admin panel. Why? I believe it would have been redundant to create a new one, when the data I need to use is there already. I achieved this by displaying the edit, delete and add buttons, only when the user is logged in as admin/superadmin, and hiding the buttons when not. This method is also used in other parts of the website.

2. I wasn't sure about how to put the 3 categories large/small/senior together, as 2 of those relate to size, and the third one to age. One option would be to create more tables, but in my opinion, it would make the database more confusing and redundant, when you could just filter the SENIOR animals by using an if age >= 8 statement. (this is what I did).

3. I recycled my last codereview and used the skeleton of it to make this one. I also used material from the prework and stuff I did during the week.

4. Login data:
ADMIN (normal one):
email: normaladmin@admin.com
password: admin123

SUPERADMIN:
email: admin@admin.com
password: superadmin123

Normal user (you can create more by registrating):
email: alejandro@gmail.com
password: user123

5. I didn't bother validating everything, as I focused more on making things work first, rather than making it pretty. If this was a real project, I would take more time to polish all the details, including visual aspects and logical stuff, like validators.

6. The way I prevent normal users to edit and add data, is by simply not displaying the submit buttons that are related to the forms. I'm not sure if this could mean a security problem, but I believe it should be good enough for this example at least. I suppose if it was a real project, I would check if the user is an admin, before executing any queries that modify the database