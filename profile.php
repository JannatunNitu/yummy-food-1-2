<?php
include "./backend_inc/header.php"
?>

<div class="container-fluid">
    <h2>Profile page</h2>

    <div class="row">
        <div class="col-lg-8">
            <div class="card rounded p-3">
            <form action="">
                <div class="row">
                    <div class="col-lg-4">
                        <label for="profile_img" style="width: 100%; object-fit:cover;"><img class="profile_image" style="width: 220px; " src="https://api.dicebear.com/7.x/bottts-neutral/svg?seed=<?= $_SESSION['auth']['fname'] ?>" alt=""></label>
                        <input type="file" id="profile_img" class="profile_pic_selector">
                    </div>
                    <div class="col-lg-8">
                        <input value="<?= $_SESSION['auth']['fname'] ?>" class="form-control my-3" type="text" placeholder="first Name">
                        <input value="<?= $_SESSION['auth']['lname'] ?>" class="form-control my-3" type="text" placeholder="Last Name">
                        <input value="<?= $_SESSION['auth']['email'] ?>" class="form-control my-3" type="text" placeholder="Email Address">
                        <button class="btn btn-primary w-100">Update</button>
            
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="card rounded p-3">
          <form action="">
            <input type="text" class="form-control my-3" placeholder="Old Password">
            <input type="text" class="form-control my-3" placeholder="New Password">
            <input type="text" class="form-control my-3" placeholder="Confirm Password">
            <button class="btn btn-primary w-100">Update</button>

          </form>
          </div>
        </div>
    </div>
</div>


<?php
include "./backend_inc/footer.php"
?>



<script>
    let profileInput = document.querySelector('.profile_pic_selector')
    let profileImage = document.querySelector('.profile_image')

    function updateImage(event){
        let url = URL.createObjectURL(event.target.files[0]);
        profileImage.src = url
        console.log(url);
    }
    profileInput.addEventListener('change', updateImage)
</script>