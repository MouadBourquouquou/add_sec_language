<?php 
include '../inc/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="file/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style_section_lang.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$home?>">
    <title>الجيل البرمجي</title>
</head>
<body dir="rtl">
<?php
    session_start();
    include $if_not_reg;
    include $navbar;
    $firstname = $_SESSION['data']->firstname;
    $lastname  = $_SESSION['data']->lastname;
    
?>
<!-- start hello section -->
   <section id="hello">
<div class="hello_text">

<h1> مرحبا <?php echo $firstname." ".$lastname  ?> </h1>
<p>نحن في فريق الجيل البرمجي العربي نرحب بك بشدة في مجتمعنا. نحن نقدر انضمامك إلينا ونتطلع إلى تجربتك معنا.

بمجرد تسجيلك، فقد فتحت بابًا للعديد من الفرص والمزايا التي يقدمها موقعنا. سواء كنت تبحث عن المعلومات، أو حتى توسيع دائرة معارفك، نحن هنا لنجعل تجربتك سهلة وممتعة.
لا تتردد في استكشاف ما يمكن أن تقدمه لك خدماتنا ومواردنا المتنوعة. كما يمكنك دائمًا التواصل مع فريق الدعم الفني لدينا إذا كانت لديك أي أسئلة أو استفسارات.

نأمل أن تجد الجيل البرمجي العربي مفيدًا وملهمًا بالنسبة لك كما هو الحال بالنسبة لنا. نحن نتطلع إلى مستقبل مشرق معكم ونأمل أن تكون تجربتك معنا ممتعة ومثمرة.

مرة أخرى، أهلاً ومرحبًا بك في الجيل البرمجي العربي</p>
</div>
<div class="hello_img">
    <img src="../file/image/hellping.jpg" alt="helping">
</div>
   </section>
<!-- end hello section -->

  <!-- start section roadmap -->
 <div id="road" >
<div class="info">

    <h1>اختر المسار البرمجي الذي ترغب به
</h1>
    <p>قم باختيار المسار البرمجي الذي ترغب في تعلمه وسيتم اضافة
        ذالك الى ملفك الشخصي مع تتبع مسارك ومشاهدة تقدمك قم 
        بجتياز التمارين والاختبارات بنجاح لترتقي لمستويات اعلى بالتوفيق
    
</p>

</div>
<div class="road1">
    <img src="../file/image/home/road.jpg" alt="المسار المتاح">
    <div class="description">
        <h1>مسار التاسيس في البرمجة</h1>
       <p>
من هنا تنطلق الخطوة الاولى في التاسيس البرمجي لن تحتاج الى اي خبرة مسبقة سنبدا من الصفر خطوة خطوة ان شاء الله
       </p>
       <button type="submit" id="foundation">ابدا الان</button>
    </div>
</div>
<div class="road1">
    <img src="../file/image/home/webdes.jpg" alt="تصميم المواقع">
    <div class="description">
        <h1>تصميم واجهة المواقع</h1>
        <p>من خلال اختيارك لهذا المسار ستمكن من تعلم كيف تصمم واجهات مواقع 
            جذابة مع احدث التقنيات المتاحة 
        </p>
        <button type="submit" id="web_designe">ابدا الان</button>
    </div>
</div>
<div class="road1">
    <img src="../file/image/home/webdev.jpg" alt="تصميم المواقع">
    <div class="description">
        <h1>  برمجة وتطوير المواقع</h1>
      <p>من خلال اختيارك لهذا المسار ستتكمن من تنمية قدرتك
        على برمجة المواقع وجعل الموقع قابل للتفاعل مع المستخدم
      </p>
        <button type="submit" id="web_designe">ابدا الان</button>
    </div>
</div>
<div class="road1">
    <img src="../file/image/home/server.jpg" alt="تصميم المواقع">
    <div class="description">
        <h1>    برمجة خلفية المواقع</h1>
<p>من خلال هدا المسار ستتمكن من ربط موقعك مع قاعدة البيانات وادارة 
    بيانات المستخدمين والتعامل مع قواعد البيانات بشكل احترافي
</p>
        <button type="submit" id="web_designe">ابدا الان</button>
    </div>
</div>

 </div>
  <!-- end section roadmap -->















<!-- add section for avaibal languages -->

<section class="languages">
    <div class="html">
        <figure class="fig"><img src="../file/image/home/html.jpg" alt="no image"></figure>
        <p class="hed">HTML</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_html">اختيار</button>

    </div>
    <div class="css">
        <figure class="fig"><img src="../file/image/home/css.png" alt="no image"></figure>
        <p class="hed">CSS</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_css">اختيار</button>

    </div>
    <div class="JS">
        <figure class="fig"><img src="../file/image/home/javascript.png" alt="no image"></figure>
        <p class="hed">JavaScript</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_JS">اختيار</button>

    </div>
    <div class="php">
        <figure class="fig"><img src="../file/image/home/php.png" alt="no image"></figure>
        <p class="hed">PHP</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_php">اختيار</button>

    </div>
    <div class="c">
        <figure class="fig"><img src="../file/image/home/C.png" alt="no image"></figure>
        <p class="hed">C</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_c">اختيار</button>

    </div>
    <div class="cpp">
        <figure class="fig"><img src="../file/image/home/CPP.png" alt="no image"></figure>
        <p class="hed">++C</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_cpp">اختيار</button>

    </div>
    <div class="C_char">
        <figure class="fig"><img src="../file/image/home/C_char.png" alt="no image"></figure>
        <p class="hed">#C</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_C_char">اختيار</button>

    </div>
    <div class="sql">
        <figure class="fig"><img src="../file/image/home/sql.png" alt="no image"></figure>
        <p class="hed">SQL</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_sql">اختيار</button>

    </div>
    <div class="python">
        <figure class="fig"><img src="../file/image/home/python.png" alt="no image"></figure>
        <p class="hed">PYTHON</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_python">اختيار</button>

    </div>
    <div class="java">
        <figure class="fig"><img src="../file/image/home/java.png" alt="no image"></figure>
        <p class="hed">JAVA</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_java">اختيار</button>

    </div>
    <div class="ruby">
        <figure class="fig"><img src="../file/image/home/ruby.png" alt="no image"></figure>
        <p class="hed">RUBY</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_ruby">اختيار</button>

    </div>
    <div class="another1">
        <figure class="fig"><img src="#" alt="no image"></figure>
        <p class="hed">another1</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_another">اختيار</button>

    </div>
    <div class="another2">
        <figure class="fig"><img src="#" alt="no image"></figure>
        <p class="hed">another2</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_another">اختيار</button>

    </div>
    <div class="another3">
        <figure class="fig"><img src="#" alt="no image"></figure>
        <p class="hed">another3</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_another">اختيار</button>

    </div>
    <div class="another4">
        <figure class="fig"><img src="#" alt="no image"></figure>
        <p class="hed">another4</p>
        <p class="para">هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <button class="butt_another">اختيار</button>

    </div>
    






</section>





















</body>
</html>
