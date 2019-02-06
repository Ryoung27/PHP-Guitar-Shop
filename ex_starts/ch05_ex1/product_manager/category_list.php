<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($catagories as $catagory) : ?>
        <tr>
            <td><?php echo $catagory["catagoryName"]; ?></td>
            <td>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_catagory"/>
                    <input type="hidden" name="catagory_id" value="<?php echo $catagory["catagoryID"]; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>        
        <!-- add category rows here -->
    </table>

    <h2>Add Category</h2>
    <form id="add_category_form" action="index.php" method="post">
    <input type="hidden" name="action" value="add_category"/>
    <label>
        Name
    </label>
    <input type="text" name="name" />
    <input type="submit" value="Add"/>
    </form>
    <!-- add code for form here -->

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>