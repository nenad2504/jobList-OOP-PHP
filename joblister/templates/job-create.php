<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Create Job Listing</h2>
    <form action="create.php" method="POST">
        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="company" required>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control">
            <option value="0">Choose Category</option>
                        <?php foreach($categories as $category): ?>
                            <option required value="<?= $category->id; ?>"><?= $category->name; ?></option>
                        <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Job Title</label>
            <input type="text" class="form-control" name="job_title" requried>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" class="form-control" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location" required>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" class="form-control" name="salary" required>
        </div>
        <div class="form-group">
            <label>Contact User</label>
            <input type="text" class="form-control" name="contact_user" required>
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email" required>
        </div>
        <input type="submit" class="btn btn-secondary" value="Submit" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>