// Import Popmotion
var _window$popmotion = window.popmotion,
    styler = _window$popmotion.styler,
    spring = _window$popmotion.spring,
    value = _window$popmotion.value,
    transform = _window$popmotion.transform,
    listen = _window$popmotion.listen,
    valueTypes = _window$popmotion.valueTypes;
var blendColor = transform.blendColor,
    clamp = transform.clamp,
    interpolate = transform.interpolate,
    pipe = transform.pipe;

// Select elements

var input = document.querySelector('.input-container input');
var counter = document.querySelector('.input-container label');

// Setup styler and scale `value`
var counterStyler = styler(counter);
var counterScale = value(1, counterStyler.set('scale'));

var charLimit = parseInt(counter.innerHTML);

var fireSpring = function fireSpring() {
    return spring({
        from: counterScale.get(),
        to: 1,
        velocity: Math.max(counterScale.getVelocity(), 100),
        stiffness: 700,
        damping: 80
    }).start(counterScale);
};

var convertCharCountToColor = pipe(clamp(charLimit * 0.5, charLimit),
    // Map character count to a 0-1 range
    interpolate([charLimit * 0.5, charLimit], [0, 1]),
    // Use that number to blend grey and red
    blendColor(counterStyler.get('color'), '#f00'));

var updateRemainingCharsCounter = function updateRemainingCharsCounter(val) {
    // Measure char count
    var charCount = val.length;

    // Set remaining chars
    counter.innerHTML = charLimit - charCount;

    // Set counter color
    counterStyler.set('color', convertCharCountToColor(charCount));
};

listen(input, 'keydown').filter(function(_ref) {
    var target = _ref.target;
    return target.value.length === charLimit;
}).start(fireSpring);

listen(input, 'keyup').pipe(function(_ref2) {
    var target = _ref2.target;
    return target.value;
}).start(updateRemainingCharsCounter);