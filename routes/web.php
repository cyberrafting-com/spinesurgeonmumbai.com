<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/media', function () {
    return view('media');
})->name('media');

Route::get('/spine-team', function () {
    return view('spine-team');
})->name('spine-team');

Route::get('/about-doctor', function () {
    return view('about-doctor');
})->name('about-doctor');

Route::get('/scoliosis-india-foundation', function () {
    return view('scoliosis-india-foundation');
})->name('scoliosis-india-foundation');

Route::get('/about-mumbai-institute-of-spine-surgery', function () {
    return view('about-mumbai-institute-of-spine-surgery');
})->name('about-mumbai-institute-of-spine-surgery');

Route::get('/about-centre-of-excellence-in-spine-surgery', function () {
    return view('about-centre-of-excellence-in-spine-surgery');
})->name('about-centre-of-excellence-in-spine-surgery');

Route::get('/back-pain', function () {
    return view('back-pain');
})->name('back-pain');

Route::get('/neckcrea-pain', function () {
    return view('neck-pain');
})->name('neck-pain');

Route::get('/herniated-disc', function () {
    return view('herniated-disc');
})->name('herniated-disc');

Route::get('/spinal-fusion', function () {
    return view('spinal-fusion');
})->name('spinal-fusion');

Route::get('/spinal-stenosis', function () {
    return view('spinal-stenosis');
})->name('spinal-stenosis');

Route::get('/spinal-injections', function () {
    return view('spinal-injections');
})->name('spinal-injections');

Route::get('/spondylolisthesis', function () {
    return view('spondylolisthesis');
})->name('spondylolisthesis');

Route::get('/physiotherapy-in-spine', function () {
    return view('physiotherapy-in-spine');
})->name('physiotherapy-in-spine');

Route::get('/exercises', function () {
    return view('exercises');
})->name('exercises');

Route::get('/minimal-invasive-spine-surgery', function () {
    return view('minimal-invasive-spine-surgery');
})->name('minimal-invasive-spine-surgery');

Route::get('/micro-endoscopic-minimal-invasive-spine-surgery', function () {
    return view('micro-endoscopic-minimal-invasive-spine-surgery');
})->name('micro-endoscopic-minimal-invasive-spine-surgery');

Route::get('/common-spinal-stenosis-questions', function () {
    return view('common-spinal-stenosis-questions');
})->name('common-spinal-stenosis-questions');

Route::get('/acute-low-back-pain', function () {
    return view('acute-low-back-pain');
})->name('acute-low-back-pain');

Route::get('/ankylosing-spondylitis', function () {
    return view('ankylosing-spondylitis');
})->name('ankylosing-spondylitis');

Route::get('/back-pain-we-treat', function () {
    return view('back-pain-we-treat');
})->name('back-pain-we-treat');

Route::get('/back-pain-in-pregnancy', function () {
    return view('back-pain-in-pregnancy');
})->name('back-pain-in-pregnancy');

Route::get('/degenerative-disc-disease', function () {
    return view('degenerative-disc-disease');
})->name('degenerative-disc-disease');

Route::get('/facet-syndrome', function () {
    return view('facet-syndrome');
})->name('facet-syndrome');

Route::get('/failed-back-syndrome', function () {
    return view('failed-back-syndrome');
})->name('failed-back-syndrome');

Route::get('/kyphosis', function () {
    return view('kyphosis');
})->name('kyphosis');

Route::get('/lumbar-spondylosis', function () {
    return view('lumbar-spondylosis');
})->name('lumbar-spondylosis');

Route::get('/lumbarisation-and-sacralisation', function () {
    return view('lumbarisation-and-sacralisation');
})->name('lumbarisation-and-sacralisation');

Route::get('/neck-pain-we-treat', function () {
    return view('neck-pain-we-treat');
})->name('neck-pain-we-treat');

Route::get('/osteoporosis', function () {
    return view('osteoporosis');
})->name('osteoporosis');

Route::get('/sciatica', function () {
    return view('sciatica');
})->name('sciatica');

Route::get('/scoliosis', function () {
    return view('scoliosis');
})->name('scoliosis');

Route::get('/slip-disc', function () {
    return view('slip-disc');
})->name('slip-disc');

Route::get('/spinal-stenosis-we-treat', function () {
    return view('spinal-stenosis-we-treat');
})->name('spinal-stenosis-we-treat');

Route::get('/spondylolysis-and-spondylolisthesis', function () {
    return view('spondylolysis-and-spondylolisthesis');
})->name('spondylolysis-and-spondylolisthesis');

Route::get('/spondylosis', function () {
    return view('spondylosis');
})->name('spondylosis');


Route::get('/failed-back-syndrome', function () {
    return view('failed-back-syndrome');
})->name('failed-back-syndrome');

Route::get('/image-gallery', function () {
    return view('image-gallery');
})->name('image-gallery');

Route::get('/happy-moments-smiling-patients', function () {
    return view('happy-moments-smiling-patients');
})->name('happy-moments-smiling-patients');

Route::get('/fellowship-awards', function () {
    return view('fellowship-awards');
})->name('fellowship-awards');

Route::get('/photographs', function () {
    return view('photographs');
})->name('photographs');

Route::get('/mumbai-institute-of-spine-surgery', function () {
    return view('mumbai-institute-of-spine-surgery');
})->name('mumbai-institute-of-spine-surgery');

Route::get('/mumbai-institute-of-spine-surgery', function () {
    return view('mumbai-institute-of-spine-surgery');
})->name('mumbai-institute-of-spine-surgery');

Route::get('/minimal-invasive-spine-surgeons-of-india-2019-chandigarh', function () {
    return view('minimal-invasive-spine-surgeons-of-india-2019-chandigarh');
})->name('minimal-invasive-spine-surgeons-of-india-2019-chandigarh');

Route::get('/video-gallery', function () {
    return view('video-gallery');
})->name('video-gallery');

Route::get('/case-of-slip-disc', function () {
    return view('case-of-slip-disc');
})->name('case-of-slip-disc');

Route::get('/case-of-minimal-invasive-spine', function () {
    return view('case-of-minimal-invasive-spine');
})->name('case-of-minimal-invasive-spine');

Route::get('/case-of-mis-tlif-spinal-fusion', function () {
    return view('case-of-mis-tlif-spinal-fusion');
})->name('case-of-mis-tlif-spinal-fusion');

Route::get('/case-of-spinal-stenosis', function () {
    return view('case-of-spinal-stenosis');
})->name('case-of-spinal-stenosis');

Route::get('/patient-education', function () {
    return view('patient-education');
})->name('patient-education');

// blog pages

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/scoliosis-surgery-india-mumbai-dr-vishal-kundnani', function () {
    return view('scoliosis-surgery-india-mumbai-dr-vishal-kundnani');
})->name('scoliosis-surgery-india-mumbai-dr-vishal-kundnani');

Route::get('/robotic-spine-surgery-mumbai-dr-vishal-kundnani', function () {
    return view('robotic-spine-surgery-mumbai-dr-vishal-kundnani');
})->name('robotic-spine-surgery-mumbai-dr-vishal-kundnani');

Route::get('/spine-surgery-in-india-for-international-patients', function () {
    return view('spine-surgery-in-india-for-international-patients');
})->name('spine-surgery-in-india-for-international-patients');

Route::get('/affordable-spine-surgery-international-patients-mumbai', function () {
    return view('affordable-spine-surgery-international-patients-mumbai');
})->name('affordable-spine-surgery-international-patients-mumbai');

Route::get('/laser-spine-surgery-dr-vishal-kundnani-mumbai', function () {
    return view('laser-spine-surgery-dr-vishal-kundnani-mumbai');
})->name('laser-spine-surgery-dr-vishal-kundnani-mumbai');

Route::get('/top-10-best-spine-surgeons-in-india', function () {
    return view('top-10-best-spine-surgeons-in-india');
})->name('top-10-best-spine-surgeons-in-india');

Route::get('/best-spine-surgeon-in-mumbai-and-india-for-scoliosis-treatment', function () {
    return view('best-spine-surgeon-in-mumbai-and-india-for-scoliosis-treatment');
})->name('best-spine-surgeon-in-mumbai-and-india-for-scoliosis-treatment');

Route::get('/robotic-spine-surgery-with-dr-vishal-kundnani', function () {
    return view('robotic-spine-surgery-with-dr-vishal-kundnani');
})->name('robotic-spine-surgery-with-dr-vishal-kundnani');

Route::get('/laser-spine-surgery-with-dr-vishal-kundnani', function () {
    return view('laser-spine-surgery-with-dr-vishal-kundnani');
})->name('laser-spine-surgery-with-dr-vishal-kundnani');

Route::get('/keyhole-spine-surgery-with-dr-vishal-kundnani', function () {
    return view('keyhole-spine-surgery-with-dr-vishal-kundnani');
})->name('keyhole-spine-surgery-with-dr-vishal-kundnani');

Route::get('/endoscopic-spine-surgery-with-dr-vishal-kundnani', function () {
    return view('endoscopic-spine-surgery-with-dr-vishal-kundnani');
})->name('endoscopic-spine-surgery-with-dr-vishal-kundnani');

Route::get('/best-spine-surgeons-in-mumbai-and-india', function () {
    return view('best-spine-surgeons-in-mumbai-and-india');
})->name('best-spine-surgeons-in-mumbai-and-india');

Route::get('/spine-tip-of-the-day-backpain', function () {
    return view('spine-tip-of-the-day-backpain');
})->name('spine-tip-of-the-day-backpain');

Route::get('/spine-tip-of-the-day-back-pain', function () {
    return view('spine-tip-of-the-day-back-pain');
})->name('spine-tip-of-the-day-back-pain');

Route::get('/spine-tip-of-the-week-scoliosis', function () {
    return view('spine-tip-of-the-week-scoliosis');
})->name('spine-tip-of-the-week-scoliosis');

Route::get('/spine-tip-of-week-neck-pain', function () {
    return view('spine-tip-of-week-neck-pain');
})->name('spine-tip-of-week-neck-pain');

Route::get('/spine-tip-of-the-week-sciatica-slip-disc', function () {
    return view('spine-tip-of-the-week-sciatica-slip-disc');
})->name('spine-tip-of-the-week-sciatica-slip-disc');

Route::get('/do-you-have-a-lockdown-neck-pain', function () {
    return view('do-you-have-a-lockdown-neck-pain');
})->name('do-you-have-a-lockdown-neck-pain');

Route::get('/success-story-case-4', function () {
    return view('success-story-case-4');
})->name('success-story-case-4');

Route::get('/success-story-case-3', function () {
    return view('success-story-case-3');
})->name('success-story-case-3');

Route::get('/success-story-case-2', function () {
    return view('success-story-case-2');
})->name('success-story-case-2');

Route::get('/success-story-case-1', function () {
    return view('success-story-case-1');
})->name('success-story-case-1');

Route::get('/spinext-clinic-consult-spine-specialist-dr-vishal-kundnani', function () {
    return view('spinext-clinic-consult-spine-specialist-dr-vishal-kundnani');
})->name('spinext-clinic-consult-spine-specialist-dr-vishal-kundnani');

Route::get('/spine-clinic-is-future-ready-warwithcorona', function () {
    return view('spine-clinic-is-future-ready-warwithcorona');
})->name('spine-clinic-is-future-ready-warwithcorona');

Route::get('/best-docs-mumbai-2020', function () {
    return view('best-docs-mumbai-2020');
})->name('best-docs-mumbai-2020');

Route::get('/mega-health-camp-tribal-villages-of-mandla-mp', function () {
    return view('mega-health-camp-tribal-villages-of-mandla-mp');
})->name('mega-health-camp-tribal-villages-of-mandla-mp');

Route::get('/spine-pain-amid-lockdown', function () {
    return view('spine-pain-amid-lockdown');
})->name('spine-pain-amid-lockdown');

Route::get('/best-spine-surgeon-mumbai', function () {
    return view('best-spine-surgeon-mumbai');
})->name('best-spine-surgeon-mumbai');

Route::get('/slip-disc-treatment-mumbai', function () {
    return view('slip-disc-treatment-mumbai');
})->name('slip-disc-treatment-mumbai');

Route::get('/best-spine-surgeons-mumbai', function () {
    return view('best-spine-surgeons-mumbai');
})->name('best-spine-surgeons-mumbai');

Route::get('/top-spine-surgeons-india', function () {
    return view('top-spine-surgeons-india');
})->name('top-spine-surgeons-india');

Route::get('/top-10-spine-doctors-India', function () {
    return view('top-10-spine-doctors-India');
})->name('top-10-spine-doctors-India');

Route::get('/best-spine-surgeons-in-india', function () {
    return view('best-spine-surgeons-in-india');
})->name('best-spine-surgeons-in-india');

Route::get('/dr-vishal-kundnani-at-apss-2025-kuala-lumpur', function () {
    return view('dr-vishal-kundnani-at-apss-2025-kuala-lumpur');
})->name('dr-vishal-kundnani-at-apss-2025-kuala-lumpur');

Route::get('/slip-disc-symptoms-diagnosis-treatment-india', function () {
    return view('slip-disc-symptoms-diagnosis-treatment-india');
})->name('slip-disc-symptoms-diagnosis-treatment-india');

Route::get('/best-spine-specialist-in-bandra', function () {
    return view('best-spine-specialist-in-bandra');
})->name('best-spine-specialist-in-bandra');

Route::get('/best-spine-doctor-in-bandra', function () {
    return view('best-spine-doctor-in-bandra');
})->name('best-spine-doctor-in-bandra');

Route::get('/3d-printed-implants-spine-surgery-mumbai', function () {
    return view('3d-printed-implants-spine-surgery-mumbai');
})->name('3d-printed-implants-spine-surgery-mumbai');

Route::get('/important-link', function () {
    return view('important-link');
})->name('important-link');

Route::get('/best-spine-surgeon-in-bandra', function () {
    return view('best-spine-surgeon-in-bandra');
})->name('best-spine-surgeon-in-bandra');

Route::get('/best-back-pain-doctor-in-bandra', function () {
    return view('best-back-pain-doctor-in-bandra');
})->name('best-back-pain-doctor-in-bandra');

Route::get('/best-slip-disc-doctor-in-bandra', function () {
    return view('best-slip-disc-doctor-in-bandra');
})->name('best-slip-disc-doctor-in-bandra');

Route::get('/best-neck-pain-doctor-in-bandra', function () {
    return view('best-neck-pain-doctor-in-bandra');
})->name('best-neck-pain-doctor-in-bandra');

Route::get('/best-spine-specialist-in-bandra', function () {
    return view('best-spine-specialist-in-bandra');
})->name('best-spine-specialist-in-bandra');

Route::get('/spine-surgery-india-international-patients-miss', function () {
    return view('spine-surgery-india-international-patients-miss');
})->name('spine-surgery-india-international-patients-miss');

Route::get('/best-spine-surgery-hospital-india-miss', function () {
    return view('best-spine-surgery-hospital-india-miss');
})->name('best-spine-surgery-hospital-india-miss');

Route::get('/affordable-spine-surgery-international-patients-mumbai-miss', function () {
    return view('affordable-spine-surgery-international-patients-mumbai-miss');
})->name('affordable-spine-surgery-international-patients-mumbai-miss');

Route::get('/spine-surgery-safe-modern-solution', function () {
    return view('spine-surgery-safe-modern-solution');
})->name('spine-surgery-safe-modern-solution');

Route::get('/is-spine-surgery-safe-india', function () {
    return view('is-spine-surgery-safe-india');
})->name('is-spine-surgery-safe-india');

Route::get('/best-spine-surgeon-india', function () {
    return view('best-spine-surgeon-india');
})->name('best-spine-surgeon-india');

Route::get('/minimally-invasive-spine-surgery-mumbai', function () {
    return view('minimally-invasive-spine-surgery-mumbai');
})->name('minimally-invasive-spine-surgery-mumbai');

Route::get('/scoliosis-surgery-in-india', function () {
    return view('scoliosis-surgery-in-india');
})->name('scoliosis-surgery-in-india');

Route::get('/best-scoliosis-surgeon-in-india', function () {
    return view('best-scoliosis-surgeon-in-india');
})->name('best-scoliosis-surgeon-in-india');

Route::get('/best-spine-surgeon-india', function () {
    return view('best-spine-surgeon-india');
})->name('best-spine-surgeon-india');

Route::get('/best-spine-surgeon-in-india', function () {
    return view('best-spine-surgeon-in-india');
})->name('best-spine-surgeon-in-india');

Route::get('/minimally-invasive-scoliosis-surgery-faster-recovery', function () {
    return view('minimally-invasive-scoliosis-surgery-faster-recovery');
})->name('minimally-invasive-scoliosis-surgery-faster-recovery');

Route::get('/slip-disc-surgery-india', function () {
    return view('slip-disc-surgery-india');
})->name('slip-disc-surgery-india');

Route::get('/microscopic-spine-surgery', function () {
    return view('microscopic-spine-surgery');
})->name('microscopic-spine-surgery');

Route::get('/endoscopic-spine-surgery-india', function () {
    return view('endoscopic-spine-surgery-india');
})->name('endoscopic-spine-surgery-india');

Route::get('/adult-scoliosis-managing-pain-quality-of-life', function () {
    return view('adult-scoliosis-managing-pain-quality-of-life');
})->name('adult-scoliosis-managing-pain-quality-of-life');

Route::get('/scoliosis-in-children-teens-when-to-seek-help', function () {
    return view('scoliosis-in-children-teens-when-to-seek-help');
})->name('scoliosis-in-children-teens-when-to-seek-help');

Route::get('/scoliosis-treatment-mumbai-dr-vishal-kundnani', function () {
    return view('scoliosis-treatment-mumbai-dr-vishal-kundnani');
})->name('scoliosis-treatment-mumbai-dr-vishal-kundnani');

Route::get('/understanding-scoliosis-symptoms-diagnosis-treatment', function () {
    return view('understanding-scoliosis-symptoms-diagnosis-treatment');
})->name('understanding-scoliosis-symptoms-diagnosis-treatment');

Route::get('/neuromonitoring-in-spine-surgery-mumbai', function () {
    return view('neuromonitoring-in-spine-surgery-mumbai');
})->name('neuromonitoring-in-spine-surgery-mumbai');

Route::get('/advanced-spine-surgery-mumbai-dr-vishal-kundnani', function () {
    return view('advanced-spine-surgery-mumbai-dr-vishal-kundnani');
})->name('advanced-spine-surgery-mumbai-dr-vishal-kundnani');



// marathi service pages start

Route::get('/back-pain-m', function () {
    return view('marathi.back-pain-m');
})->name('back-pain-m');

Route::get('/neck-pain-m', function () {
    return view('marathi.neck-pain-m');
})->name('neck-pain-m');

Route::get('/herniated-disc-m', function () {
    return view('marathi.herniated-disc-m');
})->name('herniated-disc-m');


Route::get('/spinal-fusion-m', function () {
    return view('marathi.spinal-fusion-m');
})->name('spinal-fusion-m');

Route::get('/spinal-stenosis-m', function () {
    return view('marathi.spinal-stenosis-m');
})->name('spinal-stenosis-m');

Route::get('/spinal-injections-m', function () {
    return view('marathi.spinal-injections-m');
})->name('spinal-injections-m');

Route::get('/spondylolisthesis-m', function () {
    return view('marathi.spondylolisthesis-m');
})->name('spondylolisthesis-m');








// marathi service pages end