<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Meet the Team</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="about-us">
        <h2>About Us</h2>
        <h3>MEET THE TEAM</h3>

        <div class="team-grid">
            <?php
            // Team members data
            $team = [
                ['name' => 'Neo Marinas', 'role' => 'UI Designer', 'image' => 'https://scontent.fmnl11-1.fna.fbcdn.net/v/t39.30808-6/340250311_112848818439729_6778433662959928385_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHE8cmxl4ckNPneUgPw8NUxjefOX8pyuN6N585fynK43nhkFkHWFLSamK9FGajoecu8iAafIqnuBJ8YLY8Nlgy_&_nc_ohc=6g06YUAiyXwQ7kNvgHkmPw9&_nc_ht=scontent.fmnl11-1.fna&_nc_gid=APBviQB7p8Wq0TEvwVEK4Gm&oh=00_AYBvY8LcC0ix9aHr3CXA5HBkZKP5LLR839e6yUUK1LOvfQ&oe=670D81AB'],
                ['name' => 'John Andrew Dimana', 'role' => 'Lead Programmer', 'image' => 'https://scontent.fmnl11-1.fna.fbcdn.net/v/t39.30808-6/451191795_3839585679645153_1615782467117102583_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHexG6fwwivyHH9cCfKMDVgmQXYmXYDvieZBdiZdgO-J-k56B-9HDL-LbpG1UnU7xOVRAtRziQWKP94ayYvmyHx&_nc_ohc=pkcR_pBEQm8Q7kNvgFWO8jE&_nc_ht=scontent.fmnl11-1.fna&_nc_gid=Ahvt8rv6gLBbpDCe9jgdHhM&oh=00_AYBtue3CeRnLeYZFfJtMH4t87l9olqaP0fpnb_C2fzDikg&oe=670D71D7'],
                ['name' => 'Patrick James Desipeda', 'role' => 'Programmer', 'image' => 'https://scontent.fmnl11-1.fna.fbcdn.net/v/t39.30808-6/416893240_1470778477114724_263062884638493423_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFhVLAYKyzMiuqxcXWavUybe9-tyo4Krnx7363KjgqufLShDUakP_ywUcrtBg9fYE_ELRZakiardski3M1HtXZk&_nc_ohc=cIQhdsSaigwQ7kNvgFUqaLB&_nc_ht=scontent.fmnl11-1.fna&_nc_gid=AvVGMulU6iVSXldhtQpd0Bm&oh=00_AYB0jiYVTUgFhYvgM47EPEX-oPfQXssZrql4nhHfrI_-3A&oe=670D5F73'],
                ['name' => 'Ma. Hannah Mae Paulino', 'role' => 'UI Designer', 'image' => 'https://scontent.fmnl11-1.fna.fbcdn.net/v/t39.30808-6/339411308_1613567765787635_1543808789644068539_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeGHwQGadoCm4G9uhSbXj59ooZrzvekmXmqhmvO96SZeamzVp3mKoniZ2Uv-3iRbUAZ9vAeOCdcENwoYZbkW4IUC&_nc_ohc=Zv_PADH6YuIQ7kNvgE7_jyF&_nc_ht=scontent.fmnl11-1.fna&_nc_gid=Amqy6hYNDgkrJK7dzoCEIhu&oh=00_AYAtw-4N_UAGElzjmFxMtJQq8f-xMOgzR-DdrN_FJlU3Ow&oe=670D5652'],
                ['name' => 'Noel Daniel Villamayor', 'role' => 'Lead Programmer', 'image' => 'https://scontent.fmnl11-1.fna.fbcdn.net/v/t39.30808-6/436209912_7414554015265518_7465858832888002996_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeGBj_YTmbkV2-21GvX56I-2UgWYg4UFKqZSBZiDhQUqpk7AOKH2WEC4w_cvEhnR9CP4K9aWACoVCYE4-UR4_few&_nc_ohc=zTXk6mjJMTcQ7kNvgGNo15z&_nc_ht=scontent.fmnl11-1.fna&_nc_gid=AxHdeyTMJlVUs3eRTlC2fxV&oh=00_AYDoXmIvby-l6g7QxmEVXSrX0RFLQZiaoLmgtR3GfHW4pg&oe=670D520E'],
                ['name' => 'Kenneth Eroll Almuete', 'role' => 'Programmer', 'image' => 'https://scontent.fmnl11-1.fna.fbcdn.net/v/t1.6435-9/93518034_3677389008997964_5787285787875737600_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=13d280&_nc_eui2=AeFoYXgax5LfvT3KOUf89Jre7s9xiTz_uY7uz3GJPP-5jho2BQzD6I3Q9B-VaAo6jABA2OMaP4yREdKCPcoBrDKi&_nc_ohc=REU7XXFQGM8Q7kNvgFV0ogj&_nc_ht=scontent.fmnl11-1.fna&_nc_gid=AesI5nI08c8zkawdzqfRIXx&oh=00_AYAzL58DVpdIJrBYV-KbG3zawRkuPE_LxW7vh9qOQzHxDA&oe=672F12C8']
            ];

            // Loop to generate team member cards
            foreach ($team as $member) {
                echo '
                <div class="team-member-card">
                    <div class="image-circle" style="background-image: url('.$member['image'].');"></div>
                    <h4>'.$member['name'].'</h4>
                    <p>'.$member['role'].'</p>
                </div>';
            }
            ?>
        </div>
        <br>
    </section>

    <footer class="footer">
        <p>© PHP. All Rights Reserved 2023 &nbsp; &nbsp; BSCS502</p>
    </footer>
</body>
</html>
