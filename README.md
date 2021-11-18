# CRUD 2 🧱 



## 🎯 Objectives
- Consolidate and solidify knowledge from [the first CRUD exercise](https://github.com/EvaRoets/crud)

## ✔️ Specifications
- Build a logic that allows the user or admin to create, read, update and delete data 
- Include validation, styling or retaining data when validation fails

### 🌱 Must-haves
#### 0️⃣ Preparation
- Think of a collection for which you'd like to have an inventory.
- What information is interesting to keep track of?
- Prepare a database structure to contain this info and add some quick dummy content
- Have a look at the provided structure (make as much use of it as you can, it will pay off later)

#### 1️⃣ Read
- Build an overview of your collection on the overview page.

#### 2️⃣ Create
- Create a form containing all the relevant fields.
- Save the field information as a new entry in the database once it is submitted.
- In a real application, you'd validate all data. In this case it's optional: focus on the database parts first.

#### 3️⃣ Update
- Create a new file called edit.php.
- Load this edit page when clicking on an edit entry link for any specific item.
- Make sure the database is updated when the edit form is submitted.

#### 4️⃣ Delete
- Build a link to delete.php that will delete a specific product from the database
- Afterwards, it will redirect to the overview

### 🌻 Nice-to-haves
- Add a detail page called show.php (no styling needed) that is accessed once an item is clicked.
- Read up on SQL injection and protect your code against it.
