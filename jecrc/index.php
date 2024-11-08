<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Doctors</title>
</head>
<body>
    <h1>Search for Doctors</h1>
    <form action="search_doctor.php" method="get">
        <label for="search">Search by Name/Clinic:</label>
        <input type="text" name="search" id="search" placeholder="Doctor or Clinic Name">
        <br>
        <label for="specialization">Specialization:</label>
        <input type="text" name="specialization" id="specialization" placeholder="Specialization">
        <br>
        <label for="city">City:</label>
        <input type="text" name="city" id="city" placeholder="City">
        <br>
        <input type="submit" value="Search">
    </form>
</body>
</html>
