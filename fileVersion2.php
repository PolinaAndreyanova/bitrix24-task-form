<?php
include "array.php";
include "marking.php";

if (isset($_GET['type']) && ($_GET['type'] == "array" || $_GET['type'] == "json")) {
    $typeFlag = $_GET['type'];
    $arInf = [];
    if ($typeFlag === "array") {
        $arInf = $arData;
    } else if ($typeFlag === "json") {
        $jsonKeys = file_get_contents("data.json");
        $arInf = json_decode($jsonKeys, true);
    }?>
    <!DOCTYPE html>
    <!-- saved from url=(0072)https://b24-hfbu5j.bitrix24.ru/company/personal/user/1/tasks/task/edit/0 -->
    <html class="bx-core bx-win bx-no-touch bx-retina bx-chrome">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="apple-itunes-app" content="app-id=561683423">
        <link rel="apple-touch-icon-precomposed" href="https://b24-hfbu5j.bitrix24.ru/images/iphone/57x57.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://b24-hfbu5j.bitrix24.ru/images/iphone/72x72.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://b24-hfbu5j.bitrix24.ru/images/iphone/114x114.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://b24-hfbu5j.bitrix24.ru/images/iphone/144x144.png">
        <script type="text/javascript" async="" src="./news_files/ba.js.Без названия"></script>
        <script type="text/javascript" data-skip-moving="true">
            (function(w, d, n) {
                var cl = "bx-core";
                var ht = d.documentElement;
                var htc = ht ? ht.className : undefined;
                if (htc === undefined || htc.indexOf(cl) !== -1) {
                    return;
                }
                var ua = n.userAgent;
                if (/(iPad;)|(iPhone;)/i.test(ua)) {
                    cl += " bx-ios";
                } else if (/Windows/i.test(ua)) {
                    cl += ' bx-win';
                } else if (/Macintosh/i.test(ua)) {
                    cl += " bx-mac";
                } else if (/Linux/i.test(ua) && !/Android/i.test(ua)) {
                    cl += " bx-linux";
                } else if (/Android/i.test(ua)) {
                    cl += " bx-android";
                }
                cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? " bx-touch" : " bx-no-touch");
                cl += w.devicePixelRatio && w.devicePixelRatio >= 2 ? " bx-retina" : " bx-no-retina";
                var ieVersion = -1;
                if (/AppleWebKit/.test(ua)) {
                    cl += " bx-chrome";
                } else if (/Opera/.test(ua)) {
                    cl += " bx-opera";
                } else if (/Firefox/.test(ua)) {
                    cl += " bx-firefox";
                }
                ht.className = htc ? htc + " " + cl : cl;
            })(window, document, navigator);
        </script>
        <link href="./news_files/intranet-common.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.design-tokens.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/bitrix24-design-tokens.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.font.opensans.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/main.popup.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(1).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/sidepanel.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/mask.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/slider.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/colorpicker.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/theme_picker.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/loader.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/popupcomponentsmaker.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.icons.base.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.icons.b24.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.icons.disk.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.icons.service.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.buttons.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/socialnetwork.common.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/slider(1).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/dialogs.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.notification.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.font.roboto.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/bottomsheet.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/public-v2.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/deletedviewform.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/info-helper.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/rename.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/tasks.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_date.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_planner.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_planner_handler.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/tooltip.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_tooltip.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_finder.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.hint.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/qrauthorization.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/entity-selector.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/sonet-entity-selector.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/sidepanel.menu.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/sidepanel.layout.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/main.avatar-editor.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/helper.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.cnt.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/draggable.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/disk.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/file_dialog.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(2).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.buttons.icons.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(3).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.switcher.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/call.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/applayout.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/phonenumber.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/phone-calls.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/common.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/notification-manager.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/parser.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/confirm.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/loader.bundle(1).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.forms.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/audioplayer.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/registry.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/recent-list.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_access.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/marketplace.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/tour.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/tutor.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.alert.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_viewer.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/content_view.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(4).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/livefeed.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/media.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/video_recorder.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.common.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_ui_control.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_ui_date.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/index.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(5).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/copilot.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/progressround.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.uploader.tile-widget.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(6).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/disk.uploader.uf-file.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/html-editor.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_uf.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/socialnetwork.selector.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/callback.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/mail.selector.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/callback(1).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/intranet.selector.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/callback(2).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/callback(3).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/layout-form.bundle.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/core_ui_select.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/main.rating.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/ui.livefeed.background.css" type="text/css" rel="stylesheet">
        <link href="./news_files/urlpreview.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/popup.min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(7).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(8).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(9).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(10).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(11).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(12).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(13).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(14).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(15).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(16).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(17).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(18).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(19).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/popup(1).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(20).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/popup(2).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(21).min.css" type="text/css" rel="stylesheet">
        <link href="./news_files/style(22).min.css" type="text/css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="./news_files/copilot-banner.bundle.min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/check-list-item.bundle.min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/progressbar.bundle.min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/task-popups.min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(23).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(24).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(25).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(26).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(27).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(28).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(29).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(30).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(31).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(32).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(1).css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(33).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(34).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(35).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(36).min.css">
        <link type="text/css" rel="stylesheet" href="./news_files/style(37).min.css">
        <link href="./news_files/style(38).min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/style(39).min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/style(40).min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/style(41).min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/style(42).min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/style(43).min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/groups.min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/map.min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/style(44).min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/style(45).min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/style(46).min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/style(47).min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/template_styles.min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/interface.min.css" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="./news_files/main.css" type="text/css" media="screen" data-template-style="true" data-theme-id="light:video-jupiter" rel="stylesheet">
        <link href="./news_files/menu.css" type="text/css" media="screen" data-template-style="true" data-theme-id="light:video-jupiter" rel="stylesheet">
        <link href="./news_files/style(2).css" type="text/css" media="screen" data-template-style="true" data-theme-id="light:video-jupiter" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="print" href="./news_files/print.css">
        <title>Новая задача</title>
    </head>

    <body class="template-bitrix24 bitrix24-light-theme im-bar-mode" dropzone="copy f:*/*">
        <div id="feed-add-post-content-tasks" style="display: block;">
            <div id="feed-add-post-content-tasks-container">
                <div id="bx-component-scope-livefeed_task_form" class="task-form tasks">
                    <div>
                        <!-- цикл -->
                        <?php
                        foreach ($arInf as $key => $value) {
                            $arM = $arMarking[$value["marking"]];
                            if ($value["type"] == "withoutTitle") {
                                echo $arM["start"] . $value["value"] . $arM["end"];
                            } elseif ($value["type"] == "element") {
                                echo $arM["start"] . $value["title"] . $arM["afterTitle"];
                                foreach ($value["value"] as $k => $v) {
                                    echo $arM["itemStart"] . $v . $arM["itemEnd"];
                                }
                                echo $arM["afterItems"] . $value["option"]["button"]["name"] . $arM["afterButton"];
                                if (array_key_exists("extraButton", $value["option"])) {
                                    echo $arM["extraButtonStart"] . $value["option"]["extraButton"]["name"] . $arM["extraButtonEnd"];
                                }
                                echo $arM["end"];
                            } elseif ($value["type"] == "checkbox") {
                                echo $arM["start"] . $value["title"] . $arM["afterTitle"] . $value["option"]["checked"] . $arM["isChecked"] . $value["value"] . $arM["end"];
                            } elseif ($value["type"] == "deadline") {
                                echo $arM["start"] . $value["title"] . $arM["afterTitle"] . $value["value"] . $arM["afterValue"];
                                foreach ($value["option"]["extraButton"] as $k => $v) {
                                    echo $arM["buttonStart"] . $v["name"] . $arM["buttonEnd"];
                                }
                                echo $arM["end"];
                            } elseif ($value["type"] == "reminder") {
                                echo $arM["start"] . $value["title"] . $arM["afterTitle"];
                                foreach ($value["value"] as $k => $v) {
                                    echo $arM["itemStart"] . $v . $arM["itemEnd"];
                                }
                                echo $arM["end"];
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="feed-buttons-block" id="feed-add-buttons-blockblogPostForm">
            <span class="ui-btn ui-btn-lg ui-btn-primary" id="blog-submit-button-save">Отправить</span>
            <span class="ui-btn ui-btn-lg ui-btn-link" id="blog-submit-button-cancel">Отменить</span>
        </div>
    </body>

    </html>
<?php
} else {
    echo "Неверный адрес!";
}
?>