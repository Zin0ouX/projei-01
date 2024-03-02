<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>طلب رحلة</title>
            <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/1583275772247.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 80%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: #555;
        }
        input[type="text"], input[type="email"], input[type="tel"], select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            color: #333; /* تغيير لون النص */
        }
        input[type="submit"] {
            width: 100%;
            background-color: #007bff; /* تغيير لون الزر */
            color: #fff;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* تغيير لون الزر عند التحويم */
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 20px;
            }
            input[type="text"], input[type="email"], input[type="tel"], select, input[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>اطلب رحلتك</h1>
        <form action="#">
            <label for="fullname">الاسم الكامل:</label>
            <input type="text" id="fullname" name="fullname" required>
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">رقم الهاتف:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="destination"> Visa :</label>
            <select id="destination" name="destination" required>
                <option value=""> Visa Type</option>
                <option value="Tourist Visa">Tourist Visa</option>
                <option value="Family visa">Family visa</option>
                <option value="Business visa">Business visa</option>
                <option value="Cultural visa">Cultural visa</option>
                <option value="Transit visa">Transit visa</option>
                <option value="Business visa">Business visa</option>
                <option value="Press visa">Press visa</option>
                <option value="Medical visa">Medical visa</option>
                <option value="Study visa">Study visa</option>
                <!-- إضافة المزيد من الوجهات حسب الحاجة -->
            </select>


            <label for="destination">الوجهة المطلوبة:</label>
            <select id="destination" name="destination" required>
                <option value="">اختر وجهتك</option>
                <option value="تركيا">تركيا</option>
                <option value="روسيا">روسيا</option>
                <option value="باريس">باريس</option>
                <option value="لندن">لندن</option>
                <option value="نيويورك">نيويورك</option>
                <option value="دبي">دبي</option>
                <option value="قطر">قطر</option>
                <option value="السعودية">السعودية</option>
                <!-- إضافة المزيد من الوجهات حسب الحاجة -->
            </select>
            <input type="submit" value="أرسل الطلب">
        </form>
    </div>
</body>
</html>
