<?php 
require_once 'includes/dbconnection.php';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = 'select * from subject where subject_id=' . $id;

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);

}


?>
<div class="row">
    <div class="col-md-4">
        <form id="subject_form" method="post">
        <input type="hidden" name="form_name" value="subject">
            <?php if (isset($_GET['edit'])) { ?>
                <input type="hidden" name="subject_id" value="<?= $row['subject_id']; ?>">
            <?php } ?>

            <div class="form-group">
                <label for="subject_code">Code</label>
                <input type="text" class="form-control" name="subject_code" placeholder="Subject Code"
                    value="<?= (isset($_GET['edit'])) ? $row['subject_code'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="subject_title">Title</label>
                <input type="text" class="form-control" name="subject_title" placeholder="Subject Title"
                    value="<?= (isset($_GET['edit'])) ? $row['subject_title'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" placeholder="Subject Category"
                    value="<?= (isset($_GET['edit'])) ? $row['category'] : ''; ?>" required>
            </div>


            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" rows="3"
                    required><?= (isset($_GET['edit'])) ? $row['description'] : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="unit">No. of Chapters</label>
                <input type="number" class="form-control" name="unit" required
                    value="<?= (isset($_GET['edit'])) ? $row['unit'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="Pre_req">Pre-requisites</label>
                <input type="text" class="form-control" name="Pre_req" placeholder="Prerequisite" required
                    value="<?= (isset($_GET['edit'])) ? $row['Pre_req'] : ''; ?>">
            </div>
            <div class="form-group">

                <label for="semester">Semester </label>
                <select class="form-control" name="semester" required>
                    <option value="1" <?= (isset($_GET['edit']) && $row['semester'] == 1) ? 'selected' : ''; ?>>1st
                    </option>
                    <option value="2" <?= (isset($_GET['edit']) && $row['semester'] == 2) ? 'selected' : ''; ?>>2nd
                    </option>
                    <option value="3" <?= (isset($_GET['edit']) && $row['semester'] == 3) ? 'selected' : ''; ?>>3rd
                    </option>
                    <option value="4" <?= (isset($_GET['edit']) && $row['semester'] == 4) ? 'selected' : ''; ?>>4th
                    </option>
                    <option value="5" <?= (isset($_GET['edit']) && $row['semester'] == 5) ? 'selected' : ''; ?>>5th
                    </option>
                    <option value="6" <?= (isset($_GET['edit']) && $row['semester'] == 6) ? 'selected' : ''; ?>>6th
                    </option>
                </select>
            </div>

                



            <button type="submit" class="btn btn-secondary btn-block"><?= (isset($_GET['edit'])) ? 'Update' : 'Create'; ?></button>



            <?php 
        if (isset($_GET['type'])) {
            $type = $_GET['type'];
            if ($type == 'success') {
                echo "<script>
                alert('Data inserted');
            
            </script>";
            } else {
                echo "<script>
                alert('Data failed to insert');
            
            </script>";
            }
        }

        ?>
        </form>
    </div>



    <div class="col-md-8">
        <div class="table-responsive">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Code</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Chapters</th>
                        <th scope="col">Prerequisites</th>
                        <th scope="col">Semester</th>
                        <th scope="col" colspan="2">Action</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
            $query = "select * from subject";
            $result = mysqli_query($conn, $query);


            $count = 1;

            while ($subject = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $count; ?></td>
                        <td><?= $subject['subject_code']; ?></td>
                        <td><?= $subject['subject_title']; ?></td>
                        <td><?= $subject['category']; ?></td>
                        <td><?= $subject['unit']; ?></td>
                        <td><?= $subject['Pre_req']; ?></td>
                        <td><?= $subject['semester']; ?></td>
                        <td><a href="index.php?page=subjects&edit=<?= $subject['subject_id']; ?>"
                                class="btn btn-info btn-sm">Edit</a></td>
                        <td><a href="process.php?table=subject&delete=<?= $subject['subject_id']; ?>"
                                class="btn btn-danger btn-sm">Delete</a></td>


                    </tr>


                    <?php 
                $count++;
            }
            ?>



                </tbody>
            </table>
        </div>
    </div>
</div>

