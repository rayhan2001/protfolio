$(function() {
	var iconlist = ['home', 'apartment', 'pencil', 'magic-wand', 'drop', 'lighter', 'poop', 'sun', 'moon', 'cloud', 'cloud-upload', 'cloud-download', 'cloud-sync', 'cloud-check', 'database', 'lock', 'cog', 'trash', 'dice', 'heart',
            'star', 'star-half', 'star-empty', 'flag', 'envelope', 'paperclip', 'inbox', 'eye', 'printer', 'file-empty', 'file-add', 'enter', 'exit', 'graduation-hat', 'license', 'music-note', 'film-play', 'camera-video',
            'camera', 'picture', 'book', 'bookmark', 'user', 'users', 'shirt', 'store', 'cart', 'tag', 'phone-handset', 'phone', 'pushpin', 'map-marker', 'map', 'location', 'calendar-full', 'keyboard', 'spell-check', 'screen',
            'smartphone', 'tablet', 'laptop', 'laptop-phone', 'power-switch', 'bubble', 'heart-pulse', 'construction', 'pie-chart', 'chart-bars', 'gift', 'diamond', 'linearicons', 'dinner', 'coffee-cup', 'leaf', 'paw', 'rocket',
            'briefcase', 'bus', 'car', 'train', 'bicycle', 'wheelchair', 'select', 'earth', 'smile', 'sad', 'neutral', 'mustache', 'alarm', 'bullhorn', 'volume-high', 'volume-medium', 'volume-low', 'volume', 'mic', 'hourglass',
            'undo', 'redo', 'sync', 'history', 'clock', 'download', 'upload', 'enter-down', 'exit-up', 'bug', 'code', 'link', 'unlink', 'thumbs-up', 'thumbs-down', 'magnifier', 'cross', 'menu', 'list', 'chevron-up',
            'chevron-down', 'chevron-left', 'chevron-right', 'arrow-up', 'arrow-down', 'arrow-left', 'arrow-right', 'move', 'warning', 'question-circle', 'menu-circle', 'checkmark-circle', 'cross-circle', 'plus-circle',
            'circle-minus', 'arrow-up-circle', 'arrow-down-circle', 'arrow-left-circle', 'arrow-right-circle', 'chevron-up-circle', 'chevron-down-circle', 'chevron-left-circle', 'chevron-right-circle', 'crop', 'frame-expand',
            'frame-contract', 'layers', 'funnel', 'text-format', 'text-format-remove', 'text-size', 'bold', 'italic', 'underline', 'strikethrough', 'highlight', 'text-align-left', 'text-align-center', 'text-align-right',
            'text-align-justify', 'line-spacing', 'indent-increase', 'indent-decrease', 'pilcrow', 'direction-ltr', 'direction-rtl', 'page-break', 'sort-alpha-asc', 'sort-amount-asc', 'hand', 'pointer-up', 'pointer-right',
            'pointer-down', 'pointer-left'
        ];

        for (var i = 0, l = iconlist.length; i < l; i++) {
            $('#icons-container').append(
                '<div class="i-block card" data-clipboard-text="lnr lnr-' + iconlist[i] + '" data-filter="' + iconlist[i] + '"  data-toggle="tooltip" title="lnr lnr-' + iconlist[i] + '">' +
                '<i class="lnr lnr-' + iconlist[i] + '"></i>' +
                '</div>');
        }
        $(window).on('load', function() {
            var iclp = new Clipboard('.i-block');
            $('[data-toggle="tooltip"]').tooltip();
            iclp.on('success', function(e) {
                $(e.trigger).append("<span class='icon-badge badge badge-success'>copied</span>");
                setTimeout(function() {
                    $('.i-block').children('.icon-badge').remove();
                }, 3000);
            });

            iclp.on('error', function(e) {
                $(e.trigger).append("<span class='icon-badge badge badge-danger'>Error</span>");
                setTimeout(function() {
                    $('.i-block').children('.icon-badge').remove();
                }, 3000);
            });

            $("#icons-search").on("keyup", function() {
                var g = $(this).val().toLowerCase();
                $(".icons-container .i-block").each(function() {
                    var t = $(this).attr('data-filter');
                    if (t) {
                        var s = t.toLowerCase();
                    }
                    if (s) {
                        var n = s.indexOf(g);
                        if (n !== -1) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    }
                });
            });
        });
});
