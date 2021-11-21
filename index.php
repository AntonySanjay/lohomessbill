<!DOCTYPE html>
<html>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,500&display=swap" rel="stylesheet">


<body>
    <div class="heading">
        <h1>Loyola Hostel</h1>
        <img src="https://scontent.fmaa2-1.fna.fbcdn.net/v/t1.18169-1/p200x200/15895109_1224474727634252_2699928315332695185_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=WNFRYo9FrPcAX-nDjU_&_nc_ht=scontent.fmaa2-1.fna&oh=6f0a9b2a4168fb9fb4ba476a006013af&oe=61946E47" alt="">
    </div>
    <form action="messbill.php" method="post">
        <label>Enter Account Number</label>
        <input type="number" name="account_number" minlength=5 maxlength=5><BR><BR>
        <label>Enter Student Name</label>
        <input type="text" name="student_name"><BR><BR>
        <label>Enter Days </label>
        <input type="number" name="total_days" min=1 max=31><BR><BR>
        <label>Choose Mess</label>
        <select name="mess">
            <option value="" selected disabled hidden>Select Mess</option>
            <option value="VEG">VEG</option>
            <option value="NON-VEG">NON-VEG</option>
        </select>
        <input class="button" type="submit" name="save" value="Calculate">
    </form>
</body>

<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    .heading {
        text-align: center;
        margin: 20px 0;
        color: blue;
    }

    .button {
        margin-top: 30px;
    }

    label  {
        font-size: 18px;
    }

    label::after {
        content: ":";
    }

    form {
        display: flex;
        justify-content: center;
        flex-direction: column;
        max-width: 20%;
        margin: 0 auto;
        margin-bottom: 40px;
    }
</style>

</html>
