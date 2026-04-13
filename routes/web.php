
<?php

// use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\SigninController;

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

Route::get('/minimally-invasive-spine-surgery-india', function () {
    return view('blog.minimally-invasive-spine-surgery-india');
})->name('minimally-invasive-spine-surgery-india');

Route::get('/cervical-spine-surgery-mumbai', function () {
    return view('blog.cervical-spine-surgery-mumbai');
})->name('cervical-spine-surgery-mumbai');



Route::get('/back-pain-specialist-mumbai', function () {
    return view('blog.back-pain-specialist-mumbai');
})->name('back-pain-specialist-mumbai');

// blogs


Route::get('early-signs-of-scoliosis', function () {
    return view('blog.early-signs-of-scoliosis');
})->name('early-signs-of-scoliosis');


Route::get('myths-vs-facts-understanding-scoliosis-better', function () {
    return view('blog.myths-vs-facts-understanding-scoliosis-better');
})->name('myths-vs-facts-understanding-scoliosis-better');



Route::get('what-to-expect-before-and-after-minimally-invasive-spine-surgery', function () {
    return view('blog.what-to-expect-before-and-after-minimally-invasive-spine-surgery');
})->name('what-to-expect-before-and-after-minimally-invasive-spine-surgery');

Route::get('why-minimally-invasive-spine-surgery-changing-lives', function () {
    return view('blog.why-minimally-invasive-spine-surgery-changing-lives');
})->name('why-minimally-invasive-spine-surgery-changing-lives');

Route::get('herniated-disc-treatment-india', function () {
    return view('blog.heriated-disc');
})->name('herniated-disc-treatment-india');

Route::get('spinal-stenosis-treatment-mumbai', function () {
    return view('blog.spinal-stenosis-treatment-mumbai');
})->name('spinal-stenosis-treatment-mumbai');

Route::get('laser-spine-surgery-india', function () {
    return view('blog.laser-spine-surgery-india');
})->name('laser-spine-surgery-india');

Route::get('back-pain-warning-signs', function () {
    return view('blog.back-pain-warning-signs');
})->name('back-pain-warning-signs');

Route::get('best-scoliosis-surgeon-india', function () {
    return view('blog.best-scoliosis-surgeon-india');
})->name('best-scoliosis-surgeon-india');

Route::get('scoliosis-surgery-india', function () {
    return view('blog.scoliosis-surgery-india');
})->name('scoliosis-surgery-india');

Route::get('3d-printed-spine-implants', function () {
    return view('blog.3d-printed-spine-implants');
})->name('3d-printed-spine-implants');

Route::get('neuromonitoring-spine-surgery', function () {
    return view('blog.neuromonitoring-spine-surgery');
})->name('neuromonitoring-spine-surgery');

Route::get('custom-3d-spine-implants', function () {
    return view('blog.custom-3d-spine-implants');
})->name('custom-3d-spine-implants');

Route::get('cervical-disc-disease-treatment-india', function () {
    return view('blog.cervical-disc-disease-treatment-india');
})->name('cervical-disc-disease-treatment-india');

Route::get('minimally-invasive-vs-open-spine-surgery', function () {
    return view('blog.minimally-invasive-vs-open-spine-surgery');
})->name('minimally-invasive-vs-open-spine-surgery');

Route::get('best-hospital-spine-surgery-mumbai', function () {
    return view('blog.best-hospital-spine-surgery-mumbai');
})->name('best-hospital-spine-surgery-mumbai');

Route::get('spine-surgery-recovery-time', function () {
    return view('blog.spine-surgery-recovery-time');
})->name('spine-surgery-recovery-time');

Route::get('osteoporosis-spine-fractures-india', function () {
    return view('blog.osteoporosis-spine-fractures-india');
})->name('osteoporosis-spine-fractures-india');

Route::get('endoscopic-spine-surgery-mumbai', function () {
    return view('blog.endoscopic-spine-surgery-mumbai');
})->name('endoscopic-spine-surgery-mumbai');

Route::get('scoliosis-specialist-india', function () {
    return view('blog.scoliosis-specialist-india');
})->name('scoliosis-specialist-india');

Route::get('sciatica-pain-treatment-mumbai', function () {
    return view('blog.sciatica-pain-treatment-mumbai');
})->name('sciatica-pain-treatment-mumbai');

Route::get('cervical-vs-lumbar-spine-surgery', function () {
    return view('blog.cervical-vs-lumbar-spine-surgery');
})->name('cervical-vs-lumbar-spine-surgery');

Route::get('/best-spine-surgeons-mumbai-2026-editorial-guide', function () {
    return view('blog.best-spine-surgeons-mumbai-2026-editorial-guide');
})->name('blog.best-spine-surgeons-mumbai-2026-editorial-guide');


// marathi service pages start


Route::get('mr/common-spinal-stenosis-questions', function () {
    return view('marathi.common-spinal-stenosis-questions-m');
})->name('common-spinal-stenosis-questions-m');

Route::get('mr/minimal-invasive-spine-surgery', function () {
    return view('marathi.minimal-invasive-spine-surgery-m');
})->name('minimal-invasive-spine-surgery-m');

Route::get('mr/back-pain', function () {
    return view('marathi.back-pain-m');
})->name('back-pain-m');

Route::get('mr/neck-pain', function () {
    return view('marathi.neck-pain-m');
})->name('neck-pain-m');

Route::get('mr/herniated-disc', function () {
    return view('marathi.herniated-disc-m');
})->name('herniated-disc-m');


Route::get('mr/spinal-fusion', function () {
    return view('marathi.spinal-fusion-m');
})->name('spinal-fusion-m');

Route::get('mr/spinal-stenosis', function () {
    return view('marathi.spinal-stenosis-m');
})->name('spinal-stenosis-m');

Route::get('mr/spinal-injections', function () {
    return view('marathi.spinal-injections-m');
})->name('spinal-injections-m');

Route::get('mr/spondylolisthesis', function () {
    return view('marathi.spondylolisthesis-m');
})->name('spondylolisthesis-m');

Route::get('mr/physiotherapy-in-spine', function () {
    return view('marathi.physiotherapy-in-spine-m');
})->name('physiotherapy-in-spine-m');

Route::get('mr/exercises', function () {
    return view('marathi.exercises-m');
})->name('exercises-m');

Route::get('mr/micro-endoscopic-minimal-invasive-spine-surgery', function () {
    return view('marathi.micro-endoscopic-minimal-invasive-spine-surgery-m');
})->name('micro-endoscopic-minimal-invasive-spine-surgery-m');

Route::get('mr/spondylosis', function () {
    return view('marathi.spondylosis-m');
})->name('spondylosis-m');

Route::get('mr/spondylolysis-and-spondylolisthesis', function () {
    return view('marathi.spondylolysis-and-spondylolisthesis-m');
})->name('spondylolysis-and-spondylolisthesis-m');

Route::get('mr/spinal-stenosis-we-treat', function () {
    return view('marathi.spinal-stenosis-we-treat-m');
})->name('spinal-stenosis-we-treat-m');

Route::get('mr/slip-disc', function () {
    return view('marathi.slip-disc-m');
})->name('slip-disc-m');

Route::get('mr/scoliosis', function () {
    return view('marathi.scoliosis-m');
})->name('scoliosis-m');

Route::get('mr/osteoporosis', function () {
    return view('marathi.osteoporosis-m');
})->name('osteoporosis-m');

Route::get('mr/neck-pain-we-treat', function () {
    return view('marathi.neck-pain-we-treat-m');
})->name('neck-pain-we-treat-m');

Route::get('mr/lumbarisation-and-sacralisation', function () {
    return view('marathi.lumbarisation-and-sacralisation-m');
})->name('lumbarisation-and-sacralisation-m');

Route::get('mr/lumbar-spondylosis', function () {
    return view('marathi.lumbar-spondylosis-m');
})->name('lumbar-spondylosis-m');

Route::get('mr/sciatica', function () {
    return view('marathi.sciatica-m');
})->name('sciatica-m');

Route::get('mr/kyphosis', function () {
    return view('marathi.kyphosis-m');
})->name('kyphosis-m');

Route::get('mr/back-pain-in-pregnancy', function () {
    return view('marathi.back-pain-in-pregnancy-m');
})->name('back-pain-in-pregnancy-m');

Route::get('mr/back-pain-we-treat', function () {
    return view('marathi.back-pain-we-treat-m');
})->name('back-pain-we-treat-m');

Route::get('/the-best-spine-surgeon-mumbai', function () {
    return view('the-best-spine-surgeon-mumbai');
})->name('the-best-spine-surgeon-mumbai');

Route::get('mr/acute-low-back-pain', function () {
    return view('marathi.acute-low-back-pain-m');
})->name('acute-low-back-pain-m');

Route::get('mr/ankylosing-spondylitis', function () {
    return view('marathi.ankylosing-spondylitis-m');
})->name('ankylosing-spondylitis-m');

Route::get('mr/degenerative-disc-disease', function () {
    return view('marathi.degenerative-disc-disease-m');
})->name('degenerative-disc-disease-m');

Route::get('mr/herniated-disc', function () {
    return view('marathi.herniated-disc-m');
})->name('herniated-disc-m');

Route::get('mr/facet-syndrome', function () {
    return view('marathi.facet-syndrome-m');
})->name('facet-syndrome-m');


Route::get('mr/failed-back-syndrome', function () {
    return view('marathi.failed-back-syndrome-m');
})->name('failed-back-syndrome-m');


// marathi service pages end

// hindi serive pages start

Route::get('/hi/neck-pain', function () {
    return view('hindi.neck-pain-h');
})->name('neck-pain-h');

Route::get('/hi/herniated-disc', function () {
    return view('hindi.herniated-disc-h');
})->name('herniated-disc-h');

Route::get('/hi/spinal-fusion', function () {
    return view('hindi.spinal-fusion-h');
})->name('spinal-fusion-h');

Route::get('/hi/micro-endoscopic-minimal-invasive-spine-surgery', function () {
    return view('hindi.micro-endoscopic-minimal-invasive-spine-surgery-h');
})->name('micro-endoscopic-minimal-invasive-spine-surgery-h');

Route::get('/hi/common-spinal-stenosis-questions', function () {
    return view('hindi.common-spinal-stenosis-questions-h');
})->name('common-spinal-stenosis-questions-h');

Route::get('/hi/ankylosing-spondylitis', function () {
    return view('hindi.ankylosing-spondylitis-h');
})->name('ankylosing-spondylitis-h');

Route::get('/hi/back-pain-we-treat', function () {
    return view('hindi.back-pain-we-treat-h');
})->name('back-pain-we-treat-h');

Route::get('/hi/failed-back-syndrome', function () {
    return view('hindi.failed-back-syndrome-h');
})->name('failed-back-syndrome-h');

Route::get('/hi/spinal-stenosis', function () {
    return view('hindi.spinal-stenosis-h');
})->name('spinal-stenosis-h');

Route::get('/hi/spinal-injections', function () {
    return view('hindi.spinal-injections-h');
})->name('spinal-injections-h');

Route::get('/hi/spondylolisthesis', function () {
    return view('hindi.spondylolisthesis-h');
})->name('spondylolisthesis-h');

Route::get('/hi/exercises', function () {
    return view('hindi.exercises-h');
})->name('exercises-h');

Route::get('/hi/minimal-invasive-spine-surgery', function () {
    return view('hindi.minimal-invasive-spine-surgery-h');
})->name('minimal-invasive-spine-surgery-h');

Route::get('/hi/acute-low-back-pain', function () {
    return view('hindi.acute-low-back-pain-h');
})->name('acute-low-back-pain-h');

Route::get('/hi/physiotherapy-in-spine', function () {
    return view('hindi.physiotherapy-in-spine-h');
})->name('physiotherapy-in-spine-h');

Route::get('/hi/back-pain-in-pregnancy', function () {
    return view('hindi.back-pain-in-pregnancy-h');
})->name('back-pain-in-pregnancy-h');

Route::get('/hi/degenerative-disc-disease', function () {
    return view('hindi.degenerative-disc-disease-h');
})->name('degenerative-disc-disease-h');

Route::get('/hi/facet-syndrome', function () {
    return view('hindi.facet-syndrome-h');
})->name('facet-syndrome-h');

Route::get('/hi/kyphosis', function () {
    return view('hindi.kyphosis-h');
})->name('kyphosis-h');

Route::get('/hi/lumbar-spondylosis', function () {
    return view('hindi.lumbar-spondylosis-h');
})->name('lumbar-spondylosis-h');

Route::get('/hi/lumbarisation-and-sacralisation', function () {
    return view('hindi.lumbarisation-and-sacralisation-h');
})->name('lumbarisation-and-sacralisation-h');

Route::get('/hi/osteoporosis', function () {
    return view('hindi.osteoporosis-h');
})->name('osteoporosis-h');

Route::get('/hi/neck-pain-we-treat', function () {
    return view('hindi.neck-pain-we-treat-h');
})->name('neck-pain-we-treat-h');

Route::get('/hi/sciatica', function () {
    return view('hindi.sciatica-h');
})->name('sciatica-h');

Route::get('/hi/scoliosis', function () {
    return view('hindi.scoliosis-h');
})->name('scoliosis-h');

Route::get('/hi/slip-disc', function () {
    return view('hindi.slip-disc-h');
})->name('slip-disc-h');

Route::get('/hi/spinal-stenosis-we-treat', function () {
    return view('hindi.spinal-stenosis-we-treat-h');
})->name('spinal-stenosis-we-treat-h');

Route::get('/hi/spondylolysis-and-spondylolisthesis', function () {
    return view('hindi.spondylolysis-and-spondylolisthesis-h');
})->name('spondylolysis-and-spondylolisthesis-h');

Route::get('/hi/spondylosis', function () {
    return view('hindi.spondylosis-h');
})->name('spondylosis-h');

Route::get('/hi/back-pain', function () {
    return view('hindi.back-pain-h');
})->name('back-pain-h');



// hindi service pages end

Route::get('/scoliosis-treatment-india', function () {
    return view('blog.scoliosis-treatment-india');
})->name('scoliosis-treatment-india');

Route::get('/spine-surgery-cost-mumbai', function () {
    return view('spine-surgery-cost-mumbai');
})->name('spine-surgery-cost-mumbai');


// landing page
Route::get('/treatment-minimal-invaisve-spine-surgery', function () {
    return view('landing-page.treatment-minimal-invaisve-spine-surgery');
})->name('treatment-minimal-invaisve-spine-surgery');
//  New file treatment-minimal.blade.php and updated changes 
Route::get('/spine-surgery-treatment-mumbai', function () {
    return view('landing-page.spine-surgery-treatment-mumbai');
})->name('spine-surgery-treatment-mumbai');
Route::get('lumber-spinal-stenosis', function () {
    return view('blog.lumber-spinal-stenosis');
})->name('lumber-spinal-stenosis');

Route::get('living-well-scoliosis', function () {
    return view('blog.living-well-scoliosis');
})->name('living-well-scoliosis');

Route::get('stages-of-lumber-spinal-stenosis', function () {
    return view('blog.stages-of-lumber-spinal-stenosis');
})->name('stages-of-lumber-spinal-stenosis');

Route::get('advanced-spine-care-minimally-invasive-surgery-mumbai', function () {
    return view('blog.advanced-spine-care-minimally-invasive-surgery-mumbai');
})->name('advanced-spine-care-minimally-invasive-surgery-mumbai');

Route::get('what-causes-lower-back-pain', function () {
    return view('blog.what-causes-lower-back-pain');
})->name('blog.what-causes-lower-back-pain');

Route::get('advanced-mis-scoliosis-spine-care', function () {
    return view('blog.advanced-mis-scoliosis-spine-care');
})->name('advanced-mis-scoliosis-spine-care');

Route::get('back-pain-sciatica-spine-problems-common-questions-answered', function () {
    return view('blog.back-pain-sciatica-spine-problems-common-questions-answered');
})->name('back-pain-sciatica-spine-problems-common-questions-answered');

Route::get('minimally-Invasive-spine-surgery-FAQ', function () {
    return view('blog.minimally-invasive-spine-surgery-faq');
})->name('minimally-Invasive-spine-surgery-FAQ');

Route::get('what-is-sciatica-and-why-it-happens', function () {
    return view('blog.what-is-sciatica-and-why-it-happens');
})->name('what-is-sciatica-and-why-it-happens');

Route::get('scoliosis-scoliosis-surgery', function () {
    return view('blog.scoliosis-scoliosis-surgery');
})->name('scoliosis-scoliosis-surgery');

Route::get('what-is-a-slipped-disc-herniated-disc', function () {
    return view('blog.what-is-a-slipped-disc-herniated-disc');
})->name('what-is-a-slipped-disc-herniated-disc');

Route::get('spinal-fusion-MIS-TLIF-spinal-decompression', function () {
    return view('blog.spinal-fusion-MIS-TLIF-spinal-decompression');
})->name('spinal-fusion-MIS-TLIF-spinal-decompression');



// latest-blog
Route::get('transforming-lives-with-minimally-invasive-spine-surgery-in-mumbai', function () {
    return view('blog.transforming-lives-with-minimally-invasive-spine-surgery-in-mumbai');
})->name('blog.transforming-lives-with-minimally-invasive-spine-surgery-in-mumbai');



Route::get('spine-surgery-common-patient-questions', function () {
    return view('blog.spine-surgery-common-patient-questions');
})->name('blog.spine-surgery-common-patient-questions');

Route::get('/spine-surgery-success-stories', function () {
    return view('blog.spine-surgery-success-stories');
})->name('blog.spine-surgery-success-stories');

Route::get('/advanced-spine-care-mumbai-dr-vishal-kundnani', function () {
    return view('blog.advanced-spine-care-mumbai-dr-vishal-kundnani');
})->name('blog.advanced-spine-care-mumbai-dr-vishal-kundnani');

Route::get('/best-spine-surgeons-in-india-2026-expert-guide', function () {
    return view('blog.best-spine-surgeons-in-india-2026-expert-guide');
})->name('blog.best-spine-surgeons-in-india-2026-expert-guide');

Route::get('/top-spine-surgeons-in-india-2026-editorial-guide', function () {
    return view('top-spine-surgeons-in-india-2026-editorial-guide');
})->name('top-spine-surgeons-in-india-2026-editorial-guide');

Route::get('/top-spine-surgeons-mumbai-2026-editorial-guide', function () {
    return view('top-spine-surgeons-mumbai-2026-editorial-guide');
})->name('top-spine-surgeons-mumbai-2026-editorial-guide');

Route::get('/dr-vishals-approach-to-ethical-spine-care', function () {
    return view('blog.dr-vishals-approach-to-ethical-spine-care');
})->name('dr-vishals-approach-to-ethical-spine-care');

Route::get('/dr-vishal-kundnani-spine-specialist-mumbai', function () {
    return redirect()->route('dr-vishals-approach-to-ethical-spine-care');
});

Route::get('/laser-spine-surgery-is-it-safe-and-effective', function () {
    return view('blog.laser-spine-surgery-is-it-safe-and-effective');
})->name('laser-spine-surgery-is-it-safe-and-effective');

Route::get('/best-laser-spine-surgeon-in-mumbai', function () {
    return redirect()->route('laser-spine-surgery-is-it-safe-and-effective');
});


Route::get('/mobile-phone-neck-syndrome-a-modern-day-spine-issue', function () {
    return view('blog.mobile-phone-neck-syndrome-a-modern-day-spine-issue');
})->name('mobile-phone-neck-syndrome-a-modern-day-spine-issue');

Route::get('/mobile-phone-neck-syndrome', function () {
    return redirect()->route('mobile-phone-neck-syndrome-a-modern-day-spine-issue');
});

Route::get('/daily-habits-to-slow-down-spinal-degeneration', function () {
    return view('blog.daily-habits-to-slow-down-spinal-degeneration');
})->name('daily-habits-to-slow-down-spinal-degeneration');

Route::get('/spinal-degeneration-prevention', function () {
    return redirect()->route('daily-habits-to-slow-down-spinal-degeneration');
});

Route::get('/desk-job-exercises-for-spine-health', function () {
    return view('blog.Desk-Job-Exercises-for-Spine-Health');
})->name('desk-job-exercises-for-spine-health');
Route::get('/correct-sitting-posture-tips-back-neck-pain', function () {
    return view('blog.correct-sitting-posture-tips-back-neck-pain');
})->name('correct-sitting-posture-tips-back-neck-pain');

