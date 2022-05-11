const { src, dest, watch, parallel, series } = require('gulp');

const scss         = require('gulp-sass')(require('sass')); //передаем возможности плагина gulp-sass
const concat       = require('gulp-concat'); //обновление файла
const browserSync  = require('browser-sync').create(); //обновление страницы
const uglify       = require('gulp-uglify-es').default; //сокращение скриптов
const autoprefixer = require('gulp-autoprefixer'); //доставляет префиксы для лучшей совместимости со старыми браузерами
const imagemin     = require('gulp-imagemin');
const del          = require('del');
const localhost           = 'DESKTOP-J106S31';

function browsersync() {
    browserSync.init({
        open: 'app',
        host: localhost,
        proxy: 'short-url',
        port: 8080
        /*server: {
            baseDir: 'app' // здесь указываем корневую папку для локального сервера
        }*/
});
}

function cleanDist() {
    return del('www/app/images')
}

function images(){
    return src('www/app/img/**/*')
        .pipe(imagemin(
            [
                imagemin.gifsicle({interlaced: true}),
                imagemin.mozjpeg({quality: 75, progressive: true}),
                imagemin.optipng({optimizationLevel: 5}),
                imagemin.svgo({
                    plugins: [
                        {removeViewBox: true},
                        {cleanupIDs: false}
                    ]
                })
            ]
        ))
        .pipe(dest('www/app/images'))
}

function scripts(){
    return src([
        'node_modules/jquery/dist/jquery.js',
        'www/app/js/main.js',
    ])
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(dest('www/app/js'))
        .pipe(browserSync.stream())
}

function styles() {
    return src('www/app/scss/style.scss')

        /* //конвертирует стили из .scss в .css
        .pipe(scss()) //конвертируем
        .pipe(dest('app/css')) //куда его передавать
        */
        //конвертирует стили из .scss в .min.css
        .pipe(scss({outputStyle : 'compressed'}))
        .pipe(concat('style.min.css')) //конкатенация - объединение
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 10 version'],
            grid: true
        }))
        .pipe(dest('www/app/css'))
        .pipe(browserSync.stream()) //просит обновить данные точечно без перезагрузки страницы
}

// function build() {
//     return src([
//         'app/css/style.min.css',
//         'app/fonts/**/*',
//         'app/js/main.min.js',
//         'app/*.php'
//     ], {base: 'app'})
//         .pipe(dest('dist'))
// }

function watching() { //следит за обновленем файла
    watch(['www/app/scss/**/*.scss'], styles);
    watch(['www/app/js/**/*.js', '!www/app/js/main.min.js'], scripts);
    watch(['www/index.php']).on('change', browserSync.reload); //просит сервер обновить страницу полностью
}

exports.styles = styles;
exports.watching = watching;
exports.browsersync = browsersync;
// exports.refactor = refactor;
exports.scripts = scripts;
exports.images = images;


// exports.build = series(cleanDist, images, build);
exports.build = series(cleanDist, images);
exports.default = parallel(styles, scripts, browsersync, watching);