<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Edit Job Listing</h2>
    <form action="edit.php?id=<?= $job->id; ?>" method="POST">
        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="company" value="<?= $job->company; ?>" required>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control">
            <option value="0">Choose Category</option>
                        <?php foreach($categories as $category): ?>
                            <?php if($job->category_id == $category->id): ?>
                                <option required value="<?= $category->id; ?>" selected><?= $category->name; ?></option>
                            <?php else: ?>
                                <option required value="<?= $category->id; ?>"><?= $category->name; ?></option>
                            <?php endif; ?>
                           
                        <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Job Title</label>
            <input type="text" class="form-control" name="job_title" value="<?= $job->job_title; ?>" requried>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" class="form-control" name="description"  required><?= $job->description; ?></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location" value="<?= $job->location; ?>" required>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" class="form-control" name="salary" value="<?= $job->salary; ?>" required>
        </div>
        <div class="form-group">
            <label>Contact User</label>
            <input type="text" class="form-control" name="contact_user" value="<?= $job->contact_user; ?>" required>
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email" value="<?= $job->contact_email; ?>" required>
        </div>
        <input type="submit" class="btn btn-secondary" value="Submit" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>