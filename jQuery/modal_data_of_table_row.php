<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>jquery show modal with sweetalert2</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="nameClass">Hasibur</td>
                <td class="idClass">1777</td>
                <td><button class="viewID">view</button></td>
            </tr>
            <tr>
                <td class="nameClass">Naim</td>
                <td class="idClass">1793</td>
                <td><button class="viewID">view</button></td>
            </tr>
            <tr>
                <td class="nameClass">Emtiyaz</td>
                <td class="idClass">1839</td>
                <td><button class="viewID">view</button></td>
            </tr>
        </tbody>
    </table>

    <br />
    <br />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.16/dist/sweetalert2.all.min.js"></script>

    <script>
        $(".viewID").on("click", function(e) {
            let n = $(this).parents("tr").find(".nameClass").text();
            let i = $(this).parents("tr").find(".idClass").text();
            console.log(n);
            console.log(i);
            Swal.fire({
                title: "EMP ID: " + i,
                text: "Username: " + n,
                showClass: {
                    popup: "animate__animated animate__backInLeft",
                },
                hideClass: {
                    popup: "animate__animated animate__backOutRight",
                },
            });
        });
    </script>
</body>

</html>