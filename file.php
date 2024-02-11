<?php
if (isset($_GET['type'])) {
    $typeFlag = $_REQUEST['type'];
    $arInf = [];
    if ($typeFlag === "array") {
        $arKeys = fopen("array.txt", "r");
        while (!feof($arKeys)) {
            $st = fgets($arKeys);
            if (str_contains($st, "=>")) {
                $st = trim($st);
                $st = trim($st, ",");
                $arSt = explode(" => ", $st);
                if (str_contains($arSt[1], "[")) {
                    $arSt[1] = explode('", "', trim($arSt[1], '", [, ]'));
                    $arInf[trim($arSt[0], '"')] = $arSt[1];
                } else {
                    $arInf[trim($arSt[0], '"')] = trim($arSt[1], '"');
                }
            }
        }
        fclose($arKeys);
    } else if ($typeFlag === "json") {
        $jsonKeys = file_get_contents("json.txt");
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

        <!-- <script type="extension/settings" data-extension="im.public">{"v2enabled":true}</script>
        <script type="extension/settings" data-extension="socialnetwork.slider">{"isSpacesAvailable":"N"}</script>
        <script type="extension/settings" data-extension="main.date">{"formats":{"FORMAT_DATE":"DD.MM.YYYY","FORMAT_DATETIME":"DD.MM.YYYY HH:MI:SS","SHORT_DATE_FORMAT":"d.m.Y","MEDIUM_DATE_FORMAT":"j M Y","LONG_DATE_FORMAT":"j F Y","DAY_MONTH_FORMAT":"j F","DAY_SHORT_MONTH_FORMAT":"j M","SHORT_DAY_OF_WEEK_MONTH_FORMAT":"D, j F","SHORT_DAY_OF_WEEK_SHORT_MONTH_FORMAT":"D, j M","DAY_OF_WEEK_MONTH_FORMAT":"l, j F","FULL_DATE_FORMAT":"l, j F Y","SHORT_TIME_FORMAT":"H:i","LONG_TIME_FORMAT":"H:i:s"}}</script> -->

        <link href="./news_files/main.css" type="text/css" media="screen" data-template-style="true" data-theme-id="light:video-jupiter" rel="stylesheet">
        <link href="./news_files/menu.css" type="text/css" media="screen" data-template-style="true" data-theme-id="light:video-jupiter" rel="stylesheet">
        <link href="./news_files/style(2).css" type="text/css" media="screen" data-template-style="true" data-theme-id="light:video-jupiter" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="print" href="./news_files/print.css">

        <!-- <script type="extension/settings" data-extension="ui.entity-selector">{"extensions":["bizproc.entity-selector","catalog.entity-selector","crm.entity-selector","highloadblock.entity-selector","im.entity-selector","imopenlines.entity-selector","intranet.entity-selector","landing.entity-selector","seo.entity-selector","socialnetwork.entity-selector","tasks.entity-selector","voximplant.entity-selector"]}</script>
        <script type="extension/settings" data-extension="bizproc.entity-selector">{"entities":[{"id":"bizproc-template","options":{"dynamicLoad":true,"dynamicSearch":true}},{"id":"bizproc-script-template","options":{"dynamicLoad":true,"dynamicSearch":true}},{"id":"bizproc-automation-template","options":{"dynamicLoad":true,"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="catalog.entity-selector">{"entities":[{"id":"product","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"supertitle","type":"string","system":true},{"name":"SEARCH_PROPERTIES","type":"string"},{"name":"PREVIEW_TEXT","type":"string"},{"name":"DETAIL_TEXT","type":"string"},{"name":"PARENT_NAME","type":"string"},{"name":"PARENT_SEARCH_PROPERTIES","type":"string"},{"name":"PARENT_PREVIEW_TEXT","type":"string"},{"name":"PARENT_DETAIL_TEXT","type":"string"}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/product.svg","captionOptions":{"fitContent":true,"maxWidth":150}}}}},{"id":"product_variation","options":{"dynamicLoad":false,"dynamicSearch":true,"searchFields":[{"name":"supertitle","type":"string","system":true},{"name":"SEARCH_PROPERTIES","type":"string"},{"name":"PREVIEW_TEXT","type":"string"},{"name":"DETAIL_TEXT","type":"string"},{"name":"PARENT_NAME","type":"string"},{"name":"PARENT_SEARCH_PROPERTIES","type":"string"},{"name":"PARENT_PREVIEW_TEXT","type":"string"},{"name":"PARENT_DETAIL_TEXT","type":"string"}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/product.svg","captionOptions":{"fitContent":true,"maxWidth":150}}}}},{"id":"variation","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"supertitle","type":"string","system":true},{"name":"SEARCH_PROPERTIES","type":"string"},{"name":"PREVIEW_TEXT","type":"string"},{"name":"DETAIL_TEXT","type":"string"},{"name":"PARENT_NAME","type":"string"},{"name":"PARENT_SEARCH_PROPERTIES","type":"string"},{"name":"PARENT_PREVIEW_TEXT","type":"string"},{"name":"PARENT_DETAIL_TEXT","type":"string"}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/product.svg","captionOptions":{"fitContent":true,"maxWidth":150}}}}},{"id":"store","options":{"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/store.svg"}}}},{"id":"dynamic","options":{"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/dynamic.svg"}}}},{"id":"agent-contractor-product-variation","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"supertitle","type":"string","system":true},{"name":"SEARCH_PROPERTIES","type":"string"},{"name":"PREVIEW_TEXT","type":"string"},{"name":"DETAIL_TEXT","type":"string"},{"name":"PARENT_NAME","type":"string"},{"name":"PARENT_SEARCH_PROPERTIES","type":"string"},{"name":"PARENT_PREVIEW_TEXT","type":"string"},{"name":"PARENT_DETAIL_TEXT","type":"string"}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/product.svg","captionOptions":{"fitContent":true,"maxWidth":150}}}}},{"id":"agent-contractor-section","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"supertitle","type":"string","system":true},{"name":"SEARCH_PROPERTIES","type":"string"},{"name":"PREVIEW_TEXT","type":"string"},{"name":"DETAIL_TEXT","type":"string"},{"name":"PARENT_NAME","type":"string"},{"name":"PARENT_SEARCH_PROPERTIES","type":"string"},{"name":"PARENT_PREVIEW_TEXT","type":"string"},{"name":"PARENT_DETAIL_TEXT","type":"string"}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/product.svg","captionOptions":{"fitContent":true,"maxWidth":150}}},"tagOptions":{"default":{"textColor":"#535c69","bgColor":"#d2f95f"}}}}]}</script>
        <script type="extension/settings" data-extension="crm.entity-selector">{"entities":[{"id":"country","options":{"dynamicLoad":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/crm\/entity-selector\/src\/images\/xx.png"}},"tagOptions":{"default":{"avatar":"\/bitrix\/js\/crm\/entity-selector\/src\/images\/xx.png"}}}}]}</script>
        <script type="extension/settings" data-extension="highloadblock.entity-selector">{"entities":[{"id":"highloadblock-element","options":{"dynamicLoad":true,"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="im.entity-selector">{"entities":[{"id":"im-bot","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"supertitle":"\u0427\u0430\u0442-\u0431\u043e\u0442","textColor":"#725acc"},"network":{"textColor":"#0a962f"},"support24":{"textColor":"#0165af"}}}},{"id":"im-chat","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"CHANNEL":{"supertitle":"\u041a\u0430\u043d\u0430\u043b"},"ANNOUNCEMENT":{"supertitle":"\u0427\u0430\u0442 \u0430\u043d\u043e\u043d\u0441\u043e\u0432"},"GROUP":{"supertitle":"\u0413\u0440\u0443\u043f\u043f\u043e\u0432\u043e\u0439 \u0447\u0430\u0442"},"VIDEOCONF":{"supertitle":"\u0427\u0430\u0442 \u0432\u0438\u0434\u0435\u043a\u043e\u043d\u0444\u0435\u0440\u0435\u043d\u0446\u0438\u0438"},"CALL":{"supertitle":"\u0427\u0430\u0442 \u0437\u0432\u043e\u043d\u043a\u0430"},"CRM":{"supertitle":"\u0427\u0430\u0442 \u0441\u0434\u0435\u043b\u043a\u0438"},"SONET_GROUP":{"supertitle":"\u0427\u0430\u0442 \u0433\u0440\u0443\u043f\u043f\u044b"},"CALENDAR":{"supertitle":"\u0427\u0430\u0442 \u0432\u0441\u0442\u0440\u0435\u0447\u0438"},"TASKS":{"supertitle":"\u0427\u0430\u0442 \u0437\u0430\u0434\u0430\u0447\u0438"},"SUPPORT24_NOTIFIER":{"supertitle":"\u041f\u043e\u0434\u0434\u0435\u0440\u0436\u043a\u043024","textColor":"#0165af"},"SUPPORT24_QUESTION":{"supertitle":"\u0412\u043e\u043f\u0440\u043e\u0441 \u0432 \u043f\u043e\u0434\u0434\u0435\u0440\u0436\u043a\u0443","textColor":"#0165af"},"LINES":{"supertitle":"\u041e\u0442\u043a\u0440\u044b\u0442\u0430\u044f \u043b\u0438\u043d\u0438\u044f","textColor":"#0a962f"},"LIVECHAT":{"supertitle":"\u041e\u0442\u043a\u0440\u044b\u0442\u0430\u044f \u043b\u0438\u043d\u0438\u044f","textColor":"#0a962f"}}}},{"id":"im-chat-user","options":{"dynamicLoad":true,"dynamicSearch":true}},{"id":"im-user","options":{"dynamicLoad":true,"dynamicSearch":true}},{"id":"im-recent","options":{"dynamicLoad":true}},{"id":"imbot-network","options":{"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="imopenlines.entity-selector">{"entities":[{"id":"imopenlines-crm-form","options":{"dynamicLoad":true,"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="intranet.entity-selector">{"entities":[{"id":"department","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/intranet\/entity-selector\/src\/images\/department.svg","supertitle":"\u041e\u0442\u0434\u0435\u043b"}},"tagOptions":{"default":{"textColor":"#5f6670","bgColor":"#e2e3e5","avatar":""}}}}]}</script>
        <script type="extension/settings" data-extension="landing.entity-selector">{"entities":[{"id":"landing","options":{"itemOptions":{"default":{"avatarOptions":{"bgSize":"cover"}},"folder":{"avatar":"\/bitrix\/js\/landing\/entity-selector\/src\/images\/icon-folder.svg"}},"dynamicLoad":true,"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="socialnetwork.entity-selector">{"entities":[{"id":"user","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"position","type":"string"},{"name":"email","type":"email"}],"searchCacheLimits":["^[=_0-9a-z+~\u0027!\\$\u0026*^`|\\#%\\\/?{}-]+(\\.[=_0-9a-z+~\u0027!\\$\u0026*^`|\\#%\\\/?{}-]+)*@"],"badgeOptions":[{"title":"\u0412 \u043e\u0442\u043f\u0443\u0441\u043a\u0435","bgColor":"#b4f4e6","textColor":"#27a68a","conditions":{"isOnVacation":true}},{"title":"\u041f\u0440\u0438\u0433\u043b\u0430\u0448\u0435\u043d","textColor":"#23a2ca","bgColor":"#dcf6fe","conditions":{"invited":true}}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/default-user.svg","link":"\/company\/personal\/user\/#id#\/","linkTitle":"\u043e \u0441\u043e\u0442\u0440\u0443\u0434\u043d\u0438\u043a\u0435"},"extranet":{"textColor":"#ca8600","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/extranet-user.svg","badges":[{"title":"\u042d\u043a\u0441\u0442\u0440\u0430\u043d\u0435\u0442","textColor":"#bb8412","bgColor":"#fff599"}]},"email":{"textColor":"#ca8600","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/email-user.svg","badges":[{"title":"\u0413\u043e\u0441\u0442\u044c","textColor":"#bb8412","bgColor":"#fff599"}]},"inactive":{"badges":[{"title":"\u0423\u0432\u043e\u043b\u0435\u043d","textColor":"#828b95","bgColor":"#eaebec"}]},"integrator":{"badges":[{"title":"\u0418\u043d\u0442\u0435\u0433\u0440\u0430\u0442\u043e\u0440","textColor":"#668d13","bgColor":"#e6f4b9"}]}},"tagOptions":{"default":{"textColor":"#1066bb","bgColor":"#bcedfc","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/default-tag-user.svg"},"extranet":{"textColor":"#a9750f","bgColor":"#ffec91","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/extranet-user.svg"},"email":{"textColor":"#a26b00","bgColor":"#ffec91","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/email-user.svg"},"inactive":{"textColor":"#5f6670","bgColor":"#ecedef"}}}},{"id":"fired-user","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"position","type":"string"},{"name":"email","type":"email"}],"searchCacheLimits":["^[=_0-9a-z+~\u0027!\\$\u0026*^`|\\#%\\\/?{}-]+(\\.[=_0-9a-z+~\u0027!\\$\u0026*^`|\\#%\\\/?{}-]+)*@"],"badgeOptions":[{"title":"\u0412 \u043e\u0442\u043f\u0443\u0441\u043a\u0435","bgColor":"#b4f4e6","textColor":"#27a68a","conditions":{"isOnVacation":true}},{"title":"\u041f\u0440\u0438\u0433\u043b\u0430\u0448\u0435\u043d","textColor":"#23a2ca","bgColor":"#dcf6fe","conditions":{"invited":true}}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/default-user.svg","link":"\/company\/personal\/user\/#id#\/","linkTitle":"\u043e \u0441\u043e\u0442\u0440\u0443\u0434\u043d\u0438\u043a\u0435"},"extranet":{"textColor":"#ca8600","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/extranet-user.svg","badges":[{"title":"\u042d\u043a\u0441\u0442\u0440\u0430\u043d\u0435\u0442","textColor":"#bb8412","bgColor":"#fff599"}]},"email":{"textColor":"#ca8600","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/email-user.svg","badges":[{"title":"\u0413\u043e\u0441\u0442\u044c","textColor":"#bb8412","bgColor":"#fff599"}]},"inactive":{"badges":[{"title":"\u0423\u0432\u043e\u043b\u0435\u043d","textColor":"#828b95","bgColor":"#eaebec"}]},"integrator":{"badges":[{"title":"\u0418\u043d\u0442\u0435\u0433\u0440\u0430\u0442\u043e\u0440","textColor":"#668d13","bgColor":"#e6f4b9"}]}},"tagOptions":{"default":{"textColor":"#1066bb","bgColor":"#bcedfc","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/default-tag-user.svg"},"extranet":{"textColor":"#a9750f","bgColor":"#ffec91","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/extranet-user.svg"},"email":{"textColor":"#a26b00","bgColor":"#ffec91","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/email-user.svg"},"inactive":{"textColor":"#5f6670","bgColor":"#ecedef"}}}},{"id":"project","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/project.svg","link":"\/workgroups\/group\/#id#\/card\/","linkTitle":"\u043e \u0433\u0440\u0443\u043f\u043f\u0435","supertitle":"\u0413\u0440\u0443\u043f\u043f\u0430"},"extranet":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/extranet-project.svg","textColor":"#ca8600","badges":[{"title":"\u042d\u043a\u0441\u0442\u0440\u0430\u043d\u0435\u0442","textColor":"#bb8412","bgColor":"#fff599"}]}},"tagOptions":{"default":{"textColor":"#207976","bgColor":"#ade7e4"},"extranet":{"textColor":"#a9750f","bgColor":"#ffec91"}}}},{"id":"meta-user","options":{"dynamicLoad":true,"dynamicSearch":false,"itemOptions":{"all-users":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/meta-user-all.svg"},"other-users":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/meta-user-other.svg"}},"tagOptions":{"all-users":{"textColor":"#5f6670","bgColor":"#dbf087","avatar":""},"other-users":{"textColor":"#5f6670","bgColor":"#dbf087","avatar":""}}}},{"id":"project-tag","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/default-tag.svg"}}}}]}</script>
        <script type="extension/settings" data-extension="tasks.entity-selector">{"entities":[{"id":"task","options":{"dynamicLoad":true,"dynamicSearch":true}},{"id":"task-tag","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/tasks\/entity-selector\/src\/images\/default-tag.svg","badgesOptions":{"fitContent":true,"maxWidth":100}}}}},{"id":"task-template","options":{"dynamicLoad":true,"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="voximplant.entity-selector">{"entities":[{"id":"voximplant_group","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/voximplant\/entity-selector\/src\/images\/telephonygroup.svg","supertitle":"\u0413\u0440\u0443\u043f\u043f\u0430 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0438\u0438"}},"tagOptions":{"default":{"textColor":"#5f6670","bgColor":"#e2e3e5","avatar":""}}}}]}</script>
        <script type="extension/settings" data-extension="im.v2.lib.desktop-api">{"isChatWindow":false,"v2":true}</script>
        <script type="extension/settings" data-extension="im.v2.lib.utils">{"limitOnline":1440,"pathToUserCalendar":"\/company\/personal\/user\/#user_id#\/calendar\/"}</script>
        <script type="extension/settings" data-extension="ui.uploader.core">{"chunkMinSize":5242880,"chunkMaxSize":104857600,"defaultChunkSize":10485760,"maxFileSize":268435456,"minFileSize":0,"imageMinWidth":1,"imageMinHeight":1,"imageMaxWidth":7000,"imageMaxHeight":7000,"imageMaxFileSize":50331648,"imageMinFileSize":0,"acceptOnlyImages":false,"acceptedFileTypes":null,"ignoredFileNames":[".ds_store","thumbs.db","desktop.ini"],"imageExtensions":[".jpg",".bmp",".jpeg",".jpe",".gif",".png",".webp"]}</script>
        <script type="extension/settings" data-extension="im.v2.lib.slider">{"v2enabled":true}</script>
        <script type="extension/settings" data-extension="im.v2.lib.desktop">{"desktopIsActive":false}</script>
        <script type="extension/settings" data-extension="im.v2.lib.parser">{"v2":true}</script>
        <script type="extension/settings" data-extension="im.v2.application.core">{"isCloud":true,"v2":true}</script>
        <script type="extension/settings" data-extension="im.v2.lib.smile-manager">{"lastUpdate":"2024-01-22T21:19:53+03:00"}</script>
        <script type="extension/settings" data-extension="disk.uploader.user-field-widget">{"canCreateDocuments":true,"documentHandlers":{"onlyoffice":{"code":"onlyoffice","name":"\u0411\u0438\u0442\u0440\u0438\u043a\u044124.Docs"},"gdrive":{"code":"gdrive","name":"Google Docs"},"onedrive":{"code":"onedrive","name":"MS Office Online"},"office365":{"code":"office365","name":"Office365"},"l":{"code":"l","name":"\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u044b \u043d\u0430 \u043a\u043e\u043c\u043f\u044c\u044e\u0442\u0435\u0440\u0435"}},"importHandlers":{"gdrive":{"code":"gdrive","name":"Google Docs"},"onedrive":{"code":"onedrive","name":"MS Office Online"},"office365":{"code":"office365","name":"Office365"},"dropbox":{"code":"dropbox","name":"Dropbox"},"yandexdisk":{"code":"yandexdisk","name":"\u042f\u043d\u0434\u0435\u043a\u0441.\u0414\u0438\u0441\u043a"},"box":{"code":"box","name":"Box"}}}</script>
        <script type="text/javascript" src="./news_files/manager.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/copilot-banner.bundle.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/entity.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/event.js.Без названия"></script> -->

        <title>Новая задача</title>

        <!-- <script type="extension/settings" data-extension="main.date">{"formats":{"FORMAT_DATE":"DD.MM.YYYY","FORMAT_DATETIME":"DD.MM.YYYY HH:MI:SS","SHORT_DATE_FORMAT":"d.m.Y","MEDIUM_DATE_FORMAT":"j M Y","LONG_DATE_FORMAT":"j F Y","DAY_MONTH_FORMAT":"j F","DAY_SHORT_MONTH_FORMAT":"j M","SHORT_DAY_OF_WEEK_MONTH_FORMAT":"D, j F","SHORT_DAY_OF_WEEK_SHORT_MONTH_FORMAT":"D, j M","DAY_OF_WEEK_MONTH_FORMAT":"l, j F","FULL_DATE_FORMAT":"l, j F Y","SHORT_TIME_FORMAT":"H:i","LONG_TIME_FORMAT":"H:i:s"}}</script>
        <script type="extension/settings" data-extension="ui.entity-selector">{"extensions":["bizproc.entity-selector","catalog.entity-selector","crm.entity-selector","highloadblock.entity-selector","im.entity-selector","imopenlines.entity-selector","intranet.entity-selector","landing.entity-selector","seo.entity-selector","socialnetwork.entity-selector","tasks.entity-selector","voximplant.entity-selector"]}</script>
        <script type="extension/settings" data-extension="bizproc.entity-selector">{"entities":[{"id":"bizproc-template","options":{"dynamicLoad":true,"dynamicSearch":true}},{"id":"bizproc-script-template","options":{"dynamicLoad":true,"dynamicSearch":true}},{"id":"bizproc-automation-template","options":{"dynamicLoad":true,"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="catalog.entity-selector">{"entities":[{"id":"product","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"supertitle","type":"string","system":true},{"name":"SEARCH_PROPERTIES","type":"string"},{"name":"PREVIEW_TEXT","type":"string"},{"name":"DETAIL_TEXT","type":"string"},{"name":"PARENT_NAME","type":"string"},{"name":"PARENT_SEARCH_PROPERTIES","type":"string"},{"name":"PARENT_PREVIEW_TEXT","type":"string"},{"name":"PARENT_DETAIL_TEXT","type":"string"}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/product.svg","captionOptions":{"fitContent":true,"maxWidth":150}}}}},{"id":"product_variation","options":{"dynamicLoad":false,"dynamicSearch":true,"searchFields":[{"name":"supertitle","type":"string","system":true},{"name":"SEARCH_PROPERTIES","type":"string"},{"name":"PREVIEW_TEXT","type":"string"},{"name":"DETAIL_TEXT","type":"string"},{"name":"PARENT_NAME","type":"string"},{"name":"PARENT_SEARCH_PROPERTIES","type":"string"},{"name":"PARENT_PREVIEW_TEXT","type":"string"},{"name":"PARENT_DETAIL_TEXT","type":"string"}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/product.svg","captionOptions":{"fitContent":true,"maxWidth":150}}}}},{"id":"variation","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"supertitle","type":"string","system":true},{"name":"SEARCH_PROPERTIES","type":"string"},{"name":"PREVIEW_TEXT","type":"string"},{"name":"DETAIL_TEXT","type":"string"},{"name":"PARENT_NAME","type":"string"},{"name":"PARENT_SEARCH_PROPERTIES","type":"string"},{"name":"PARENT_PREVIEW_TEXT","type":"string"},{"name":"PARENT_DETAIL_TEXT","type":"string"}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/product.svg","captionOptions":{"fitContent":true,"maxWidth":150}}}}},{"id":"store","options":{"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/store.svg"}}}},{"id":"dynamic","options":{"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/dynamic.svg"}}}},{"id":"agent-contractor-product-variation","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"supertitle","type":"string","system":true},{"name":"SEARCH_PROPERTIES","type":"string"},{"name":"PREVIEW_TEXT","type":"string"},{"name":"DETAIL_TEXT","type":"string"},{"name":"PARENT_NAME","type":"string"},{"name":"PARENT_SEARCH_PROPERTIES","type":"string"},{"name":"PARENT_PREVIEW_TEXT","type":"string"},{"name":"PARENT_DETAIL_TEXT","type":"string"}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/product.svg","captionOptions":{"fitContent":true,"maxWidth":150}}}}},{"id":"agent-contractor-section","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"supertitle","type":"string","system":true},{"name":"SEARCH_PROPERTIES","type":"string"},{"name":"PREVIEW_TEXT","type":"string"},{"name":"DETAIL_TEXT","type":"string"},{"name":"PARENT_NAME","type":"string"},{"name":"PARENT_SEARCH_PROPERTIES","type":"string"},{"name":"PARENT_PREVIEW_TEXT","type":"string"},{"name":"PARENT_DETAIL_TEXT","type":"string"}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/catalog\/entity-selector\/src\/images\/product.svg","captionOptions":{"fitContent":true,"maxWidth":150}}},"tagOptions":{"default":{"textColor":"#535c69","bgColor":"#d2f95f"}}}}]}</script>
        <script type="extension/settings" data-extension="crm.entity-selector">{"entities":[{"id":"country","options":{"dynamicLoad":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/crm\/entity-selector\/src\/images\/xx.png"}},"tagOptions":{"default":{"avatar":"\/bitrix\/js\/crm\/entity-selector\/src\/images\/xx.png"}}}}]}</script>
        <script type="extension/settings" data-extension="highloadblock.entity-selector">{"entities":[{"id":"highloadblock-element","options":{"dynamicLoad":true,"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="im.entity-selector">{"entities":[{"id":"im-bot","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"supertitle":"\u0427\u0430\u0442-\u0431\u043e\u0442","textColor":"#725acc"},"network":{"textColor":"#0a962f"},"support24":{"textColor":"#0165af"}}}},{"id":"im-chat","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"CHANNEL":{"supertitle":"\u041a\u0430\u043d\u0430\u043b"},"ANNOUNCEMENT":{"supertitle":"\u0427\u0430\u0442 \u0430\u043d\u043e\u043d\u0441\u043e\u0432"},"GROUP":{"supertitle":"\u0413\u0440\u0443\u043f\u043f\u043e\u0432\u043e\u0439 \u0447\u0430\u0442"},"VIDEOCONF":{"supertitle":"\u0427\u0430\u0442 \u0432\u0438\u0434\u0435\u043a\u043e\u043d\u0444\u0435\u0440\u0435\u043d\u0446\u0438\u0438"},"CALL":{"supertitle":"\u0427\u0430\u0442 \u0437\u0432\u043e\u043d\u043a\u0430"},"CRM":{"supertitle":"\u0427\u0430\u0442 \u0441\u0434\u0435\u043b\u043a\u0438"},"SONET_GROUP":{"supertitle":"\u0427\u0430\u0442 \u0433\u0440\u0443\u043f\u043f\u044b"},"CALENDAR":{"supertitle":"\u0427\u0430\u0442 \u0432\u0441\u0442\u0440\u0435\u0447\u0438"},"TASKS":{"supertitle":"\u0427\u0430\u0442 \u0437\u0430\u0434\u0430\u0447\u0438"},"SUPPORT24_NOTIFIER":{"supertitle":"\u041f\u043e\u0434\u0434\u0435\u0440\u0436\u043a\u043024","textColor":"#0165af"},"SUPPORT24_QUESTION":{"supertitle":"\u0412\u043e\u043f\u0440\u043e\u0441 \u0432 \u043f\u043e\u0434\u0434\u0435\u0440\u0436\u043a\u0443","textColor":"#0165af"},"LINES":{"supertitle":"\u041e\u0442\u043a\u0440\u044b\u0442\u0430\u044f \u043b\u0438\u043d\u0438\u044f","textColor":"#0a962f"},"LIVECHAT":{"supertitle":"\u041e\u0442\u043a\u0440\u044b\u0442\u0430\u044f \u043b\u0438\u043d\u0438\u044f","textColor":"#0a962f"}}}},{"id":"im-chat-user","options":{"dynamicLoad":true,"dynamicSearch":true}},{"id":"im-user","options":{"dynamicLoad":true,"dynamicSearch":true}},{"id":"im-recent","options":{"dynamicLoad":true}},{"id":"imbot-network","options":{"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="imopenlines.entity-selector">{"entities":[{"id":"imopenlines-crm-form","options":{"dynamicLoad":true,"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="intranet.entity-selector">{"entities":[{"id":"department","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/intranet\/entity-selector\/src\/images\/department.svg","supertitle":"\u041e\u0442\u0434\u0435\u043b"}},"tagOptions":{"default":{"textColor":"#5f6670","bgColor":"#e2e3e5","avatar":""}}}}]}</script>
        <script type="extension/settings" data-extension="landing.entity-selector">{"entities":[{"id":"landing","options":{"itemOptions":{"default":{"avatarOptions":{"bgSize":"cover"}},"folder":{"avatar":"\/bitrix\/js\/landing\/entity-selector\/src\/images\/icon-folder.svg"}},"dynamicLoad":true,"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="socialnetwork.entity-selector">{"entities":[{"id":"user","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"position","type":"string"},{"name":"email","type":"email"}],"searchCacheLimits":["^[=_0-9a-z+~\u0027!\\$\u0026*^`|\\#%\\\/?{}-]+(\\.[=_0-9a-z+~\u0027!\\$\u0026*^`|\\#%\\\/?{}-]+)*@"],"badgeOptions":[{"title":"\u0412 \u043e\u0442\u043f\u0443\u0441\u043a\u0435","bgColor":"#b4f4e6","textColor":"#27a68a","conditions":{"isOnVacation":true}},{"title":"\u041f\u0440\u0438\u0433\u043b\u0430\u0448\u0435\u043d","textColor":"#23a2ca","bgColor":"#dcf6fe","conditions":{"invited":true}}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/default-user.svg","link":"\/company\/personal\/user\/#id#\/","linkTitle":"\u043e \u0441\u043e\u0442\u0440\u0443\u0434\u043d\u0438\u043a\u0435"},"extranet":{"textColor":"#ca8600","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/extranet-user.svg","badges":[{"title":"\u042d\u043a\u0441\u0442\u0440\u0430\u043d\u0435\u0442","textColor":"#bb8412","bgColor":"#fff599"}]},"email":{"textColor":"#ca8600","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/email-user.svg","badges":[{"title":"\u0413\u043e\u0441\u0442\u044c","textColor":"#bb8412","bgColor":"#fff599"}]},"inactive":{"badges":[{"title":"\u0423\u0432\u043e\u043b\u0435\u043d","textColor":"#828b95","bgColor":"#eaebec"}]},"integrator":{"badges":[{"title":"\u0418\u043d\u0442\u0435\u0433\u0440\u0430\u0442\u043e\u0440","textColor":"#668d13","bgColor":"#e6f4b9"}]}},"tagOptions":{"default":{"textColor":"#1066bb","bgColor":"#bcedfc","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/default-tag-user.svg"},"extranet":{"textColor":"#a9750f","bgColor":"#ffec91","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/extranet-user.svg"},"email":{"textColor":"#a26b00","bgColor":"#ffec91","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/email-user.svg"},"inactive":{"textColor":"#5f6670","bgColor":"#ecedef"}}}},{"id":"fired-user","options":{"dynamicLoad":true,"dynamicSearch":true,"searchFields":[{"name":"position","type":"string"},{"name":"email","type":"email"}],"searchCacheLimits":["^[=_0-9a-z+~\u0027!\\$\u0026*^`|\\#%\\\/?{}-]+(\\.[=_0-9a-z+~\u0027!\\$\u0026*^`|\\#%\\\/?{}-]+)*@"],"badgeOptions":[{"title":"\u0412 \u043e\u0442\u043f\u0443\u0441\u043a\u0435","bgColor":"#b4f4e6","textColor":"#27a68a","conditions":{"isOnVacation":true}},{"title":"\u041f\u0440\u0438\u0433\u043b\u0430\u0448\u0435\u043d","textColor":"#23a2ca","bgColor":"#dcf6fe","conditions":{"invited":true}}],"itemOptions":{"default":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/default-user.svg","link":"\/company\/personal\/user\/#id#\/","linkTitle":"\u043e \u0441\u043e\u0442\u0440\u0443\u0434\u043d\u0438\u043a\u0435"},"extranet":{"textColor":"#ca8600","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/extranet-user.svg","badges":[{"title":"\u042d\u043a\u0441\u0442\u0440\u0430\u043d\u0435\u0442","textColor":"#bb8412","bgColor":"#fff599"}]},"email":{"textColor":"#ca8600","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/email-user.svg","badges":[{"title":"\u0413\u043e\u0441\u0442\u044c","textColor":"#bb8412","bgColor":"#fff599"}]},"inactive":{"badges":[{"title":"\u0423\u0432\u043e\u043b\u0435\u043d","textColor":"#828b95","bgColor":"#eaebec"}]},"integrator":{"badges":[{"title":"\u0418\u043d\u0442\u0435\u0433\u0440\u0430\u0442\u043e\u0440","textColor":"#668d13","bgColor":"#e6f4b9"}]}},"tagOptions":{"default":{"textColor":"#1066bb","bgColor":"#bcedfc","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/default-tag-user.svg"},"extranet":{"textColor":"#a9750f","bgColor":"#ffec91","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/extranet-user.svg"},"email":{"textColor":"#a26b00","bgColor":"#ffec91","avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/email-user.svg"},"inactive":{"textColor":"#5f6670","bgColor":"#ecedef"}}}},{"id":"project","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/project.svg","link":"\/workgroups\/group\/#id#\/card\/","linkTitle":"\u043e \u0433\u0440\u0443\u043f\u043f\u0435","supertitle":"\u0413\u0440\u0443\u043f\u043f\u0430"},"extranet":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/extranet-project.svg","textColor":"#ca8600","badges":[{"title":"\u042d\u043a\u0441\u0442\u0440\u0430\u043d\u0435\u0442","textColor":"#bb8412","bgColor":"#fff599"}]}},"tagOptions":{"default":{"textColor":"#207976","bgColor":"#ade7e4"},"extranet":{"textColor":"#a9750f","bgColor":"#ffec91"}}}},{"id":"meta-user","options":{"dynamicLoad":true,"dynamicSearch":false,"itemOptions":{"all-users":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/meta-user-all.svg"},"other-users":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/meta-user-other.svg"}},"tagOptions":{"all-users":{"textColor":"#5f6670","bgColor":"#dbf087","avatar":""},"other-users":{"textColor":"#5f6670","bgColor":"#dbf087","avatar":""}}}},{"id":"project-tag","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/socialnetwork\/entity-selector\/src\/images\/default-tag.svg"}}}}]}</script>
        <script type="extension/settings" data-extension="tasks.entity-selector">{"entities":[{"id":"task","options":{"dynamicLoad":true,"dynamicSearch":true}},{"id":"task-tag","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/tasks\/entity-selector\/src\/images\/default-tag.svg","badgesOptions":{"fitContent":true,"maxWidth":100}}}}},{"id":"task-template","options":{"dynamicLoad":true,"dynamicSearch":true}}]}</script>
        <script type="extension/settings" data-extension="voximplant.entity-selector">{"entities":[{"id":"voximplant_group","options":{"dynamicLoad":true,"dynamicSearch":true,"itemOptions":{"default":{"avatar":"\/bitrix\/js\/voximplant\/entity-selector\/src\/images\/telephonygroup.svg","supertitle":"\u0413\u0440\u0443\u043f\u043f\u0430 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0438\u0438"}},"tagOptions":{"default":{"textColor":"#5f6670","bgColor":"#e2e3e5","avatar":""}}}}]}</script>
        <script type="extension/settings" data-extension="ui.uploader.core">{"chunkMinSize":5242880,"chunkMaxSize":104857600,"defaultChunkSize":10485760,"maxFileSize":268435456,"minFileSize":0,"imageMinWidth":1,"imageMinHeight":1,"imageMaxWidth":7000,"imageMaxHeight":7000,"imageMaxFileSize":50331648,"imageMinFileSize":0,"acceptOnlyImages":false,"acceptedFileTypes":null,"ignoredFileNames":[".ds_store","thumbs.db","desktop.ini"],"imageExtensions":[".jpg",".bmp",".jpeg",".jpe",".gif",".png",".webp"]}</script>
        <script type="text/javascript" src="./news_files/datepicker.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/projectplan.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/task-date.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/task-calendar.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/check-list-item.bundle.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/progressbar.bundle.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/common.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/uploader.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/file.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/queue.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/queue.min(1).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/external_loader.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/draganddrop.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/template.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/task-popups.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/dayplan.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/utils.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/scrollpane.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/logic.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/logic.min(1).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/script.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/logic.min(2).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/logic.min(3).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/logic.min(4).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/logic.min(5).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/logic.min(6).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/logic.min(7).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/tasks.min.js.Без названия"></script>
        <script type="text/javascript" src="./news_files/script.min(1).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/script.min(2).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/script.min(3).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/script.min(4).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/logic.min(8).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/script.min(5).js.Без названия"></script>
        <script type="text/javascript" src="./news_files/logic.min(9).js.Без названия"></script>
        <script type="extension/settings" data-extension="disk.uploader.user-field-widget">{"canCreateDocuments":true,"documentHandlers":{"onlyoffice":{"code":"onlyoffice","name":"\u0411\u0438\u0442\u0440\u0438\u043a\u044124.Docs"},"gdrive":{"code":"gdrive","name":"Google Docs"},"onedrive":{"code":"onedrive","name":"MS Office Online"},"office365":{"code":"office365","name":"Office365"},"l":{"code":"l","name":"\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u044b \u043d\u0430 \u043a\u043e\u043c\u043f\u044c\u044e\u0442\u0435\u0440\u0435"}},"importHandlers":{"gdrive":{"code":"gdrive","name":"Google Docs"},"onedrive":{"code":"onedrive","name":"MS Office Online"},"office365":{"code":"office365","name":"Office365"},"dropbox":{"code":"dropbox","name":"Dropbox"},"yandexdisk":{"code":"yandexdisk","name":"\u042f\u043d\u0434\u0435\u043a\u0441.\u0414\u0438\u0441\u043a"},"box":{"code":"box","name":"Box"}}}</script> -->
    </head>

    <body class="template-bitrix24 bitrix24-light-theme im-bar-mode" dropzone="copy f:*/*">
        <div id="feed-add-post-content-tasks" style="display: block;">
            <div id="feed-add-post-content-tasks-container">
                <div id="bx-component-scope-livefeed_task_form" class="task-form tasks">
                    <div>
                        <!-- <input type="hidden" id="checklistAnalyticsData" name="ACTION[0][ARGUMENTS][data][SE_CHECKLIST][analyticsData]" value="" wfd-id="id46">
                        <input type="hidden" id="checklistFromDescription" name="ACTION[0][ARGUMENTS][data][SE_CHECKLIST][fromDescription]" value="" wfd-id="id47">
                        <input type="hidden" name="SITE_ID" value="s1" wfd-id="id48">
                        <input data-bx-id="task-edit-csrf" type="hidden" name="sessid" value="ba68e6c6bf13eef3bdae058213b36894" wfd-id="id49">
                        <input type="hidden" name="EMITTER" value="8188956239c8e8ffe984e2ddcc0884eb" wfd-id="id50">
                        <input type="hidden" name="CALENDAR_EVENT_ID" value="0" wfd-id="id51">
                        <input type="hidden" name="CALENDAR_EVENT_DATA" value="null" wfd-id="id52">
                        <input type="hidden" name="SOURCE_POST_ENTITY_TYPE" value="" wfd-id="id53">
                        <input type="hidden" name="SOURCE_ENTITY_TYPE" value="" wfd-id="id54">
                        <input type="hidden" name="SOURCE_ENTITY_ID" value="0" wfd-id="id55">
                        <input type="hidden" name="FIRST_GRID_TASK_CREATION_TOUR_GUIDE" value="" wfd-id="id56">
                        <input type="hidden" name="BACKURL" value="/company/personal/user/1/tasks/task/edit/0?any=user%2F1%2Ftasks%2Ftask%2Fedit%2F0" wfd-id="id57">
                        <input type="hidden" name="CANCELURL" value="/company/personal/user/1/tasks/" wfd-id="id58">
                        <input type="hidden" name="ACTION[0][OPERATION]" value="task.add" wfd-id="id59">
                        <input type="hidden" name="ACTION[0][PARAMETERS][CODE]" value="task_action" wfd-id="id60">
                        <input type="hidden" name="ACTION[0][ARGUMENTS][data][IM_CHAT_ID]" value="0" wfd-id="id61">
                        <input type="hidden" name="ACTION[0][ARGUMENTS][data][IM_MESSAGE_ID]" value="0" wfd-id="id62"> -->

                        <div class="task-info">
                            <div class="task-info-panel">
                                <div class="task-info-panel-important">
                                    <?= $arInf["importantTask"] ? '<input data-bx-id="task-edit-priority-cb" type="checkbox" id="tasks-task-priority-cb" wfd-id="id63" checked>' : '<input data-bx-id="task-edit-priority-cb" type="checkbox" id="tasks-task-priority-cb" wfd-id="id63">' ?>
                                    <label for="tasks-task-priority-cb">Это важная задача</label>
                                    <input data-bx-id="task-edit-priority" type="hidden" name="ACTION[0][ARGUMENTS][data][PRIORITY]" value="1" wfd-id="id64">
                                </div>
                                <div class="task-info-panel-title"><input data-bx-id="task-edit-title" type="text" name="ACTION[0][ARGUMENTS][data][TITLE]" value="<?= $arInf["taskName"] ? $arInf["taskName"] : "" ?>" placeholder="Введите название задачи" wfd-id="id65"></div>
                            </div>
                            <div data-bx-id="task-edit-editor-container" class="task-info-editor">
                                <div class="feed-add-post" id="divlivefeed_task_form" data-bx-html-editable="Y" dropzone="copy f:*/*" style="display: block;">
                                    <div class="feed-add-post-dnd-notice">
                                        <div class="feed-add-post-dnd-inner">
                                            <span class="feed-add-post-dnd-icon"></span>
                                            <span class="feed-add-post-dnd-text">Перетащите файлы</span>
                                        </div>
                                    </div>
                                    <div class="feed-add-post-form feed-add-post-edit-form">
                                        <div class="feed-add-post-text">
                                            <div class="bx-html-editor" id="bx-html-editor-livefeed_task_form" style="width: 100%; height: 200px; min-width: 350px; min-height: 100px;">
                                                <div class="bxhtmled-toolbar-cnt" id="bx-html-editor-tlbr-cnt-livefeed_task_form" style="width: 100%; opacity: inherit;">
                                                    <div class="bxhtmled-toolbar" id="bx-html-editor-tlbr-livefeed_task_form"><span class="bxhtmled-top-bar-left-wrap" style="display: none;"></span><span class="bxhtmled-top-bar-wrap" style=""><span class="bxhtmled-top-bar-btn bxhtmled-button-bold" title="Полужирный" data-bx-type="action" data-bx-action="bold"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-italic" title="Курсив" data-bx-type="action" data-bx-action="italic"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-underline" title="Подчеркнутый" data-bx-type="action" data-bx-action="underline"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-strike" title="Зачеркнутый" data-bx-type="action" data-bx-action="strikeout"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-remove-format bxhtmled-top-bar-btn-disabled" title="Удалить форматирование" data-bx-type="" data-bx-action="removeFormat"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-top-bar-color" title="Цвет текста"><span class="bxhtmled-top-bar-btn-text" style="color: rgb(82, 92, 105); background-color: transparent;">A</span><span class="bxhtmled-top-bar-color-strip" style="background-color: rgb(82, 92, 105);"></span></span>
                                                    <select unselectable="on" class="bxhtmled-top-bar-select" title="Шрифт: не указывать" style="width: 45px;">
                                                        <option>Шрифт</option>
                                                        <option>Times New Roman</option>
                                                        <option>Courier New</option>
                                                        <option>Arial / Helvetica</option>
                                                        <option>Arial Black</option>
                                                        <option>Tahoma / Geneva</option>
                                                        <option>Verdana</option>
                                                        <option>Georgia</option>
                                                        <option>monospace</option>
                                                    </select>
                                                    <span class="bxhtmled-button-fontsize-wrap" title="Размер шрифта"><span class="bxhtmled-top-bar-btn bxhtmled-button-fontsize"><i></i></span><span unselectable="on" class="bxhtmled-top-bar-select" title="Размер шрифта" style="display: none;"></span></span><span class="bxhtmled-top-bar-separator"></span><span class="bxhtmled-top-bar-btn bxhtmled-button-ordered-list" title="Нумерованный список" data-bx-type="action" data-bx-action="insertOrderedList"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-unordered-list" title="Список с маркерами" data-bx-type="action" data-bx-action="insertUnorderedList"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-align-left" title="Выровнять..."><i></i></span><span class="bxhtmled-top-bar-separator"></span><span class="bxhtmled-top-bar-btn bxhtmled-button-link" title="Ссылка"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-image" title="Изображение"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-table" title="Таблица"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-code" title="Оформление текста в виде кода" data-bx-type="action" data-bx-action="code"><i></i></span><span class="bxhtmled-top-bar-separator"></span><span class="bxhtmled-top-bar-btn bxhtmled-button-fullscreen" title="Развернуть на весь экран" data-bx-type="action" data-bx-action="fullscreen"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-bbcode bxhtmled-top-bar-btn-active" title="Режим BB-Code"><i></i></span><span class="bxhtmled-top-bar-btn feed-add-post-editor-btn-ai-image" title="AI image generator" style="display: none;"><i></i></span><span class="bxhtmled-top-bar-btn bxhtmled-button-more" title="Еще..." style="display: none;"><i></i></span></span><span class="bxhtmled-top-bar-right-wrap" style="display: none;"></span><span class="bxhtmled-top-bar-hidden-wrap"></span></div>
                                                </div>
                                                <div class="bxhtmled-search-cnt" id="bx-html-editor-search-cnt-livefeed_task_form" style="display: none;"></div>
                                                <div class="bxhtmled-area-cnt" id="bx-html-editor-area-cnt-livefeed_task_form" style="top: 43px; width: 917px; height: 157px;">
                                                    <div class="bxhtmled-iframe-cnt" id="bx-html-editor-iframe-cnt-livefeed_task_form" style="width: 914px; height: 157px; top: 0px; left: 0px; opacity: 1; display: none;"><iframe class="bx-editor-iframe" width="0" height="0" style="width: 100%; height: 100%;" src="./news_files/saved_resource(1).html"></iframe></div>
                                                    <div class="bxhtmled-textarea-cnt" id="bx-html-editor-ta-cnt-livefeed_task_form" style="width: 914px; height: 157px; top: 0px; left: 0px; opacity: 1;"><textarea class="bxhtmled-textarea"><?= $arInf["taskText"] ? $arInf["taskText"] : "" ?></textarea></div>
                                                    <div class="bxhtmled-resizer-overlay" id="bx-html-editor-res-over-livefeed_task_form"></div>
                                                    <div id="bx-html-editor-split-resizer-livefeed_task_form" class="bxhtmled-split-resizer-hor" style="display: none;"></div>
                                                </div>
                                                <div class="bxhtmled-nav-cnt" id="bx-html-editor-nav-cnt-livefeed_task_form" style="display: none;"></div>
                                                <div class="bxhtmled-taskbar-cnt bxhtmled-taskbar-hidden" id="bx-html-editor-tskbr-cnt-livefeed_task_form" style="display: none; height: 157px; width: 0px;">
                                                    <div class="bxhtmled-taskbar-top-cnt" id="bx-html-editor-tskbr-top-livefeed_task_form"></div>
                                                    <div class="bxhtmled-taskbar-resizer" id="bx-html-editor-tskbr-res-livefeed_task_form">
                                                        <div class="bxhtmled-right-side-split-border">
                                                            <div data-bx-tsk-split-but="Y" class="bxhtmled-right-side-split-btn"></div>
                                                        </div>
                                                    </div>
                                                    <div class="bxhtmled-taskbar-search-nothing" id="bxhed-tskbr-search-nothing-livefeed_task_form">Ничего не найдено</div>
                                                    <div class="bxhtmled-taskbar-search-cont" id="bxhed-tskbr-search-cnt-livefeed_task_form" data-bx-type="taskbar_search">
                                                        <div class="bxhtmled-search-alignment" id="bxhed-tskbr-search-ali-livefeed_task_form">
                                                            <input type="text" class="bxhtmled-search-inp" id="bxhed-tskbr-search-inp-livefeed_task_form" placeholder="Поиск..." wfd-id="id66">
                                                        </div>
                                                        <div class="bxhtmled-search-cancel" data-bx-type="taskbar_search_cancel" title="Отменить фильтрацию"></div>
                                                    </div>
                                                </div>
                                                <div id="bx-html-editor-file-dialogs-livefeed_task_form" style="display: none;"></div>
                                                <input type="hidden" id="bxed_livefeed_task_form" name="ACTION[0][ARGUMENTS][data][DESCRIPTION]" value="" wfd-id="id67">
                                            </div>
                                            <!-- <div style="display:none;"><input type="text" tabindex="10" onfocus="LHEPostForm.getEditor(&#39;livefeed_task_form&#39;).Focus()" name="hidden_focus" wfd-id="id68"></div> -->
                                        </div>
                                        <div class="main-post-form-toolbar">
                                            <div class="main-post-form-toolbar-buttons">
                                                <div class="main-post-form-toolbar-buttons-container" data-bx-role="toolbar">
                                                    <div class="main-post-form-toolbar-button" data-bx-role="toolbar-item" id="mpf-copilot-task-form" data-id="copilot">
                                                        <i class="ui-icon-set --copilot-ai" id="bx-b-copilot-task-form"></i><span class="main-post-form-toolbar-button-copilot">CoPilot</span>
                                                    </div>
                                                    <div class="main-post-form-toolbar-button" data-bx-role="toolbar-item" id="mpf-file-task-form" data-id="file" data-bx-files-count="0">
                                                        <i id="bx-b-uploadfile-task-form"></i><span class="main-post-form-toolbar-button-file">Файл</span>
                                                    </div>
                                                    <div class="main-post-form-toolbar-button" data-bx-role="toolbar-item" data-id="disk-document">
                                                        <div><i></i>Создать документ</div>
                                                    </div>
                                                    <div class="main-post-form-toolbar-button" data-bx-role="toolbar-item" id="mpf-mention-task-form" data-id="mention">
                                                        <span id="bx-b-mention-task-form"><i></i><span>Отметить человека</span></span>
                                                    </div>
                                                    <div class="main-post-form-toolbar-button" data-bx-role="toolbar-item" id="mpf-quote-task-form" data-id="quote" data-bx-type="action" data-bx-action="quote">
                                                        <i id="bx-b-quote-task-form" data-bx-check-command="N"><span class="bxhtmled-top-bar-btn bxhtmled-button-quote" title="Оформление текста в виде цитаты" data-bx-type="action" data-bx-action="quote"><i></i></span></i><span>Цитата</span>
                                                    </div>
                                                    <div class="main-post-form-toolbar-button" data-bx-role="toolbar-item" id="mpf-Checklist-task-form" data-id="Checklist">
                                                        <span data-bx-id="task-edit-toggler" data-target="checklist">Чек-лист</span>
                                                    </div>
                                                    <div class="main-post-form-toolbar-button" data-bx-role="toolbar-item" id="mpf-ToCheckList-task-form" data-id="ToCheckList">
                                                        <span data-bx-id="task-edit-to-checklist">в чек-лист</span>
                                                    </div>
                                                    <div class="main-post-form-toolbar-button" data-bx-role="toolbar-item" id="mpf-AiCheckList-task-form" data-id="AiCheckList">
                                                        <span data-bx-id="task-edit-ai-checklist" class="tasks-btn-ai-checklist">Чек-лист</span>
                                                    </div>
                                                </div>
                                                <div class="main-post-form-toolbar-button main-post-form-toolbar-button-more" data-bx-role="toolbar-item-more" style=""></div>
                                            </div>
                                            <div class="feed-add-post-form-but-more-open"><span class="feed-add-post-form-editor-btn feed-add-post-form-btn-active" data-bx-role="button-show-panel-editor" title="Визуальный редактор"></span> </div>
                                        </div>
                                    </div>
                                    <span id="bx-mention-task-form-id" data-bx-selector-id="mention_fr4wQV"></span>
                                    <input type="hidden" name="ACTION[0][ARGUMENTS][data][UF_TASK_WEBDAV_FILES][]" value="" wfd-id="id69">
                                    <div id="disk-uf-file-container-5vfXJAB" data-v-app=""><input name="TASKS_TASK_DISK_ATTACHED_OBJECT_TEMPLATE_VIEW" value="grid" type="hidden" wfd-id="id70">
                                        <div class="disk-user-field-control" style="display: none;">
                                            <div class="disk-user-field-uploader-panel">
                                                <div class="ui-tile-uploader">
                                                    <div class="disk-user-field-panel">
                                                        <div class="disk-user-field-panel-file-wrap">
                                                            <div class="disk-user-field-panel-card-box disk-user-field-panel-card-file">
                                                                <div class="disk-user-field-panel-card disk-user-field-panel-card-icon--upload">
                                                                    <div class="disk-user-field-panel-card-content">
                                                                        <div class="disk-user-field-panel-card-icon"></div>
                                                                        <div class="disk-user-field-panel-card-btn"></div>
                                                                        <div class="disk-user-field-panel-card-name">Загрузить</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="disk-user-field-panel-card-box disk-user-field-panel-card-file">
                                                                <div class="disk-user-field-panel-card disk-user-field-panel-card-icon--b24">
                                                                    <div class="disk-user-field-panel-card-content"><!---->
                                                                        <div class="disk-user-field-panel-card-icon"></div>
                                                                        <div class="disk-user-field-panel-card-btn"></div>
                                                                        <div class="disk-user-field-panel-card-name">Мой Диск</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="disk-user-field-panel-card-divider"></div>
                                                            <div class="disk-user-field-panel-card-box disk-user-field-panel-card-file">
                                                                <div class="disk-user-field-panel-card disk-user-field-panel-card-icon--google-docs">
                                                                    <div class="disk-user-field-panel-card-content"><!---->
                                                                        <div class="disk-user-field-panel-card-icon"></div>
                                                                        <div class="disk-user-field-panel-card-btn"></div>
                                                                        <div class="disk-user-field-panel-card-name">Google Docs</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="disk-user-field-panel-card-box disk-user-field-panel-card-file">
                                                                <div class="disk-user-field-panel-card disk-user-field-panel-card-icon--office365">
                                                                    <div class="disk-user-field-panel-card-content"><!---->
                                                                        <div class="disk-user-field-panel-card-icon"></div>
                                                                        <div class="disk-user-field-panel-card-btn"></div>
                                                                        <div class="disk-user-field-panel-card-name">Office365</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="disk-user-field-panel-card-box disk-user-field-panel-card-file">
                                                                <div class="disk-user-field-panel-card disk-user-field-panel-card-icon--dropbox">
                                                                    <div class="disk-user-field-panel-card-content"><!---->
                                                                        <div class="disk-user-field-panel-card-icon"></div>
                                                                        <div class="disk-user-field-panel-card-btn"></div>
                                                                        <div class="disk-user-field-panel-card-name">Dropbox</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ui-tile-uploader-drop-area">
                                                        <div class="ui-tile-uploader-drop-box"><label class="ui-tile-uploader-drop-label">Вы можете просто перетащить файл сюда</label>
                                                            <div class="ui-tile-uploader-settings"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-add-post-buttons --no-wrap" id="lhe_buttons_task-form">
                                        <button class="ui-btn ui-btn-sm ui-btn-primary" id="lhe_button_submit_task-form">Отправить</button>
                                        <button class="ui-btn ui-btn-sm ui-btn-link" id="lhe_button_cancel_task-form">Отменить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-bx-id="task-edit-checklist" data-block-name="SE_CHECKLIST" class="task-openable-block invisible">
                            <div class="task-checklist">
                                <div id="bx-component-scope-bitrix_tasks_widget_checklist_new_1" class="tasks">
                                    <div id="checklistArea_946c800a4cbd1c05240640f427a00867">
                                        <div class="tasks-checklist-task-root">
                                            <div id="subItems_0"></div>
                                        </div>
                                    </div>
                                    <div class="tasks-checklist-list-actions">
                                        <a id="addCheckList_946c800a4cbd1c05240640f427a00867" class="tasks-checklist-item-add-btn">добавить чек-лист</a>
                                    </div>
                                </div>
                            </div>
                            <span data-bx-id="task-edit-chooser" data-target="checklist" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                        </div>
                        <div class="task-options task-options-main">
                            <div class="task-options-item-destination-wrap">
                                <div>
                                    <div class="task-options-item task-options-item-destination">
                                        <span class="task-options-item-param">Ответственный</span>
                                        <div class="task-options-item-open-inner">
                                            <div id="bx-component-scope-livefeed_task_form-responsible" class="tasks task-form-field inline t-filled tdp-mem-sel-is-empty-false t-min tdp-mem-sel-is-min">
                                                <!--<div class="js-member-selector-container"></div>-->
                                                <span class="js-id-tdp-mem-sel-is-items tasks-h-invisible">
                                                    <script type="text/html" data-bx-id="tdp-mem-sel-is-item">
                                                        <span class="js-id-tdp-mem-sel-is-item js-id-tdp-mem-sel-is-item-{{VALUE}} task-form-field-item {{ITEM_SET_INVISIBLE}}" data-item-value="{{VALUE}}" data-bx-type="{{TYPE_SET}}">
                                                            <a class="task-form-field-item-text task-options-destination-text" href="{{URL}}">
                                                                {{DISPLAY}}
                                                            </a>
                                                            <span class="js-id-tdp-mem-sel-is-item-delete task-form-field-item-delete" title="Отменить выбор"></span>
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RESPONSIBLE][{{VALUE}}][ID]" value="{{ID}}" />
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RESPONSIBLE][{{VALUE}}][NAME]" value="{{NAME}}" />
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RESPONSIBLE][{{VALUE}}][LAST_NAME]" value="{{LAST_NAME}}" />
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RESPONSIBLE][{{VALUE}}][EMAIL]" value="{{EMAIL}}" />
                                                        </span>
                                                    </script>
                                                    <span class="js-id-tdp-mem-sel-is-item js-id-tdp-mem-sel-is-item-U1 task-form-field-item " data-item-value="U1" data-bx-type="">
                                                        <a class="task-form-field-item-text task-options-destination-text" href="https://b24-hfbu5j.bitrix24.ru/workgroups/user/1/">
                                                            polina8277@mail.ru
                                                        </a>
                                                        <span class="js-id-tdp-mem-sel-is-item-delete task-form-field-item-delete" title="Отменить выбор"></span>
                                                        <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RESPONSIBLE][U1][ID]" value="1" wfd-id="id71">
                                                        <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RESPONSIBLE][U1][NAME]" value="" wfd-id="id72">
                                                        <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RESPONSIBLE][U1][LAST_NAME]" value="" wfd-id="id73">
                                                        <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RESPONSIBLE][U1][EMAIL]" value="" wfd-id="id74">
                                                    </span>
                                                </span>
                                                <span class="task-form-field-controls">
                                                    <span class="task-form-field-loading">Загрузка...</span>
                                                    <input class="js-id-tdp-mem-sel-is-search js-id-network-selector-search task-form-field-search task-form-field-input" type="text" value="" autocomplete="off" data-groupid="0" data-role="R" wfd-id="id75">
                                                    <a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-when-filled task-form-field-link add">
                                                        Добавить еще </a>
                                                    <a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-when-empty task-form-field-link add">
                                                        Добавить </a>
                                                </span>
                                                <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RESPONSIBLE][]" value="" wfd-id="id76">
                                            </div>
                                            <span class="task-dashed-link task-dashed-link-add tasks-additional-block-link inline">
                                                <span class="task-dashed-link-inner" data-bx-id="task-edit-toggler" data-target="originator">
                                                    Постановщик </span>
                                                <span class="task-dashed-link-inner" data-bx-id="task-edit-toggler" data-target="accomplice">
                                                    Соисполнители </span>
                                                <span class="task-dashed-link-inner" data-bx-id="task-edit-toggler" data-target="auditor">
                                                    Наблюдатели </span>
                                            </span>
                                            <div data-bx-id="task-edit-absence-message" class="task-absence-message" style="display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-bx-id="task-edit-originator" data-block-name="SE_ORIGINATOR" class="pinable-block task-openable-block invisible">
                                    <div class="task-options-item task-options-item-destination">
                                        <span data-bx-id="task-edit-chooser" data-target="originator" class="task-option-fixedbtn"></span>
                                        <span class="task-options-item-param">Постановщик</span>
                                        <div class="task-options-item-open-inner">
                                            <div id="bx-component-scope-livefeed_task_form-originator" class="tasks task-form-field block t-filled tdp-mem-sel-is-empty-false t-min t-max tdp-mem-sel-is-min tdp-mem-sel-is-max" style="max-width: 786px">
                                                <!--<div class="js-member-selector-container"></div>-->
                                                <span class="js-id-tdp-mem-sel-is-items tasks-h-invisible">
                                                    <script type="text/html" data-bx-id="tdp-mem-sel-is-item">
                                                        <span class="js-id-tdp-mem-sel-is-item js-id-tdp-mem-sel-is-item-{{VALUE}} task-form-field-item {{ITEM_SET_INVISIBLE}}" data-item-value="{{VALUE}}" data-bx-type="{{TYPE_SET}}">
                                                            <a class="task-form-field-item-text task-options-destination-text" href="{{URL}}">
                                                                {{DISPLAY}}
                                                            </a>
                                                            <span class="js-id-tdp-mem-sel-is-item-delete task-form-field-item-delete" title="Отменить выбор"></span>
                                                        </span>
                                                    </script>
                                                    <span class="js-id-tdp-mem-sel-is-item js-id-tdp-mem-sel-is-item-U1 task-form-field-item " data-item-value="U1" data-bx-type="">
                                                        <a class="task-form-field-item-text task-options-destination-text" href="https://b24-hfbu5j.bitrix24.ru/workgroups/user/1/">
                                                            polina8277@mail.ru
                                                        </a>
                                                        <span class="js-id-tdp-mem-sel-is-item-delete task-form-field-item-delete" title="Отменить выбор"></span>
                                                    </span>
                                                </span>
                                                <span class="task-form-field-controls">
                                                    <span class="task-form-field-loading">Загрузка...</span>
                                                    <input class="js-id-tdp-mem-sel-is-search js-id-network-selector-search task-form-field-search task-form-field-input" type="text" value="" autocomplete="off" data-groupid="0" data-role="O" wfd-id="id77">
                                                    <a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-link">
                                                        Сменить </a>
                                                </span>
                                                <input class="js-id-tdp-mem-sel-sole-input" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_ORIGINATOR][ID]" value="1" wfd-id="id78">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-bx-id="task-edit-accomplice" data-block-name="SE_ACCOMPLICE" class="pinable-block task-openable-block invisible">
                                    <div class="task-options-item task-options-item-destination">
                                        <span data-bx-id="task-edit-chooser" data-target="accomplice" class="task-option-fixedbtn"></span>
                                        <span class="task-options-item-param">Соисполнители</span>
                                        <div class="task-options-item-open-inner" onclick="" style="">
                                            <div id="bx-component-scope-livefeed_task_form-accomplice" class="tasks task-form-field block t-empty tdp-mem-sel-is-empty-true t-min tdp-mem-sel-is-min" style="max-width: 786px">
                                                <!--<div class="js-member-selector-container"></div>-->
                                                <span class="js-id-tdp-mem-sel-is-items tasks-h-invisible">
                                                    <script type="text/html" data-bx-id="tdp-mem-sel-is-item">
                                                        <span class="js-id-tdp-mem-sel-is-item js-id-tdp-mem-sel-is-item-{{VALUE}} task-form-field-item {{ITEM_SET_INVISIBLE}}" data-item-value="{{VALUE}}" data-bx-type="{{TYPE_SET}}">
                                                            <a class="task-form-field-item-text task-options-destination-text" href="{{URL}}">
                                                                {{DISPLAY}}
                                                            </a>
                                                            <span class="js-id-tdp-mem-sel-is-item-delete task-form-field-item-delete" title="Отменить выбор"></span>
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_ACCOMPLICE][{{VALUE}}][ID]" value="{{ID}}" />
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_ACCOMPLICE][{{VALUE}}][NAME]" value="{{NAME}}" />
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_ACCOMPLICE][{{VALUE}}][LAST_NAME]" value="{{LAST_NAME}}" />
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_ACCOMPLICE][{{VALUE}}][EMAIL]" value="{{EMAIL}}" />
                                                        </span>
                                                    </script>
                                                </span>
                                                <span class="task-form-field-controls">
                                                    <span class="task-form-field-loading">Загрузка...</span>
                                                    <input class="js-id-tdp-mem-sel-is-search js-id-network-selector-search task-form-field-search task-form-field-input" type="text" value="" autocomplete="off" data-groupid="0" data-role="A" wfd-id="id79">
                                                    <a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-when-filled task-form-field-link add">
                                                        Добавить еще </a>
                                                    <a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-when-empty task-form-field-link add">
                                                        Добавить </a>
                                                </span>
                                                <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_ACCOMPLICE][]" value="" wfd-id="id80">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-bx-id="task-edit-auditor" data-block-name="SE_AUDITOR" class="pinable-block task-openable-block invisible">
                                    <div class="task-options-item task-options-item-destination">
                                        <span data-bx-id="task-edit-chooser" data-target="auditor" class="task-option-fixedbtn"></span>
                                        <span class="task-options-item-param">Наблюдатели</span>
                                        <div class="task-options-item-open-inner" onclick="" style="">
                                            <div id="bx-component-scope-livefeed_task_form-auditor" class="tasks task-form-field block t-empty tdp-mem-sel-is-empty-true t-min tdp-mem-sel-is-min" style="max-width: 786px">
                                                <!--<div class="js-member-selector-container"></div>-->
                                                <span class="js-id-tdp-mem-sel-is-items tasks-h-invisible">
                                                    <script type="text/html" data-bx-id="tdp-mem-sel-is-item">
                                                        <span class="js-id-tdp-mem-sel-is-item js-id-tdp-mem-sel-is-item-{{VALUE}} task-form-field-item {{ITEM_SET_INVISIBLE}}" data-item-value="{{VALUE}}" data-bx-type="{{TYPE_SET}}">
                                                            <a class="task-form-field-item-text task-options-destination-text" href="{{URL}}">
                                                                {{DISPLAY}}
                                                            </a>
                                                            <span class="js-id-tdp-mem-sel-is-item-delete task-form-field-item-delete" title="Отменить выбор"></span>

                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_AUDITOR][{{VALUE}}][ID]" value="{{ID}}" />
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_AUDITOR][{{VALUE}}][NAME]" value="{{NAME}}" />
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_AUDITOR][{{VALUE}}][LAST_NAME]" value="{{LAST_NAME}}" />
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_AUDITOR][{{VALUE}}][EMAIL]" value="{{EMAIL}}" />
                                                        </span>
                                                    </script>
                                                </span>
                                                <span class="task-form-field-controls">
                                                    <span class="task-form-field-loading">Загрузка...</span>
                                                    <input class="js-id-tdp-mem-sel-is-search js-id-network-selector-search task-form-field-search task-form-field-input" type="text" value="" autocomplete="off" data-groupid="0" data-role="U" wfd-id="id81">
                                                    <a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-when-filled task-form-field-link add">
                                                        Добавить еще </a>
                                                    <a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-when-empty task-form-field-link add">
                                                        Добавить </a>
                                                </span>
                                                <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_AUDITOR][]" value="" wfd-id="id82">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div data-bx-id="task-edit-date-plan-manager" class="mode-unit-selected-days task-options-item task-options-item-open">
                                    <span class="task-options-item-param">Крайний срок</span>
                                    <div class="task-options-item-more">
                                        <span class="task-options-destination-wrap date">
                                            <span data-bx-id="dateplanmanager-deadline" class="task-options-inp-container task-options-date t-empty">
                                                <input data-bx-id="datepicker-display" type="text" class="task-options-inp" value="<?=$arInf["deadline"] ? implode(" ", $arInf["deadline"]) : ""?>" readonly="readonly" wfd-id="id83">
                                                <span data-bx-id="datepicker-clear" class="task-option-inp-del"></span>
                                                <input data-bx-id="datepicker-value" type="hidden" name="ACTION[0][ARGUMENTS][data][DEADLINE]" value="" wfd-id="id84">
                                            </span>
                                        </span>
                                        <span class="task-dashed-link task-dashed-link-terms task-dashed-link-add">
                                            <span class="task-dashed-link-inner" data-bx-id="task-edit-toggler" data-target="date-plan">Планирование сроков</span>
                                            <span class="task-dashed-link-inner" data-bx-id="task-edit-toggler" data-target="options">Еще</span>
                                        </span>
                                    </div>
                                    <div class="task-options-item-open-inner task-options-item-open-inner-sh task-options-item-open-inner-sett">
                                        <div data-bx-id="task-edit-date-plan" data-block-name="DATE_PLAN" class="pinable-block task-openable-block invisible ">
                                            <div class="task-options-sheduling-block">
                                                <div class="task-options-divider"></div>
                                                <div class="task-options-field task-options-field-left">
                                                    <label for="" class="task-field-label task-field-label-br">Начать задачу с</label>
                                                    <span data-bx-id="dateplanmanager-start-date-plan" class="task-options-inp-container task-options-date t-empty">
                                                        <input data-bx-id="datepicker-display" type="text" class="task-options-inp" value="" readonly="readonly" wfd-id="id85">
                                                        <span data-bx-id="datepicker-clear" class="task-option-inp-del"></span>
                                                        <input data-bx-id="datepicker-value" type="hidden" name="ACTION[0][ARGUMENTS][data][START_DATE_PLAN]" value="" wfd-id="id86">
                                                    </span>
                                                    <div class="tasks-disabling-overlay-form" title="Сроки вычисляются автоматически"></div>
                                                </div>
                                                <div class="task-options-field task-options-field-left task-options-field-duration">
                                                    <label for="" class="task-field-label task-field-label-br">Длительность</label>
                                                    <span class="task-options-inp-container">
                                                        <input data-bx-id="dateplanmanager-duration" type="text" class="task-options-inp" value="" wfd-id="id87">
                                                    </span>
                                                    <span class="task-dashed-link">
                                                        <span data-bx-id="dateplanmanager-unit-setter" data-unit="days" class="task-dashed-link-inner">дней</span><span data-bx-id="dateplanmanager-unit-setter" data-unit="hours" class="task-dashed-link-inner">часов</span><span data-bx-id="dateplanmanager-unit-setter" data-unit="mins" class="task-dashed-link-inner">минут</span>
                                                        <input data-bx-id="dateplanmanager-duration-type-value" type="hidden" name="ACTION[0][ARGUMENTS][data][DURATION_TYPE]" value="days" wfd-id="id88">
                                                    </span>
                                                    <div class="tasks-disabling-overlay-form" title="Сроки вычисляются автоматически"></div>
                                                </div>
                                                <div class="task-options-field task-options-field-left">
                                                    <label for="" class="task-field-label task-field-label-br">Завершение</label>
                                                    <span data-bx-id="dateplanmanager-end-date-plan" class="task-options-inp-container task-options-date t-empty">
                                                        <input data-bx-id="datepicker-display" type="text" class="task-options-inp" value="" readonly="readonly" wfd-id="id89">
                                                        <span data-bx-id="datepicker-clear" class="task-option-inp-del"></span>
                                                        <input data-bx-id="datepicker-value" type="hidden" name="ACTION[0][ARGUMENTS][data][END_DATE_PLAN]" value="" wfd-id="id90">
                                                    </span>
                                                    <div class="tasks-disabling-overlay-form" title="Сроки вычисляются автоматически"></div>
                                                </div>
                                                <span data-bx-id="task-edit-chooser" data-target="date-plan" class="task-option-fixedbtn"></span>
                                            </div>
                                        </div>
                                        <div data-bx-id="task-edit-options" data-block-name="OPTIONS" class="pinable-block task-openable-block invisible">
                                            <div class="task-options-settings-block">
                                                <div class="task-options-divider"></div>
                                                <div class="task-options-field-container">
                                                    <div id="bx-component-scope-options-livefeed_task_form" class="tasks">
                                                        <div class="task-options-field">
                                                            <div class="task-options-field-inner">
                                                                <label class="
    task-field-label
    js-id-hint-help
    js-id-wg-optbar-flag-label-allow-change-deadline							" data-hint-enabled="" data-hint-text="">
                                                                    <span class="js-id-hint-help task-options-help tasks-icon-help tasks-help-cursor">Ответственный сможет изменить «планируемые даты» выполнения задачи, а также «крайний срок». Вы, как постановщик задачи, получите уведомления обо всех измененияx.</span>
                                                                    <input data-target="allow-change-deadline" data-flag-name="ALLOW_CHANGE_DEADLINE" data-yes-value="Y" data-no-value="N" checked="" class="
    js-id-wg-optbar-flag
    js-id-wg-optbar-flag-allow-change-deadline																		task-field-checkbox
    " type="checkbox" wfd-id="id91">Разрешить ответственному менять сроки задачи </label>
                                                                <input class="js-id-wg-optbar-allow-change-deadline" type="hidden" name="ACTION[0][ARGUMENTS][data][ALLOW_CHANGE_DEADLINE]" value="Y" wfd-id="id92">
                                                            </div>
                                                        </div>
                                                        <div class="task-options-field">
                                                            <div class="task-options-field-inner">
                                                                <label class="
    task-field-label
    js-id-hint-help
    js-id-wg-optbar-flag-label-match-work-time							" data-hint-enabled="" data-hint-text="Сроки вычисляются автоматически">
                                                                    <span class="js-id-hint-help task-options-help tasks-icon-help tasks-help-cursor">Если сроки выполнения задачи попадают на выходные или праздничные дни, длительность выполнения будет автоматически увеличена, что позволит спланировать точные сроки исполнения задачи.</span>
                                                                    <input data-target="match-work-time" data-flag-name="MATCH_WORK_TIME" data-yes-value="Y" data-no-value="N" class="
    js-id-wg-optbar-flag
    js-id-wg-optbar-flag-match-work-time																		task-field-checkbox
    " type="checkbox" wfd-id="id93">Пропустить выходные и праздничные дни </label>
                                                                <input class="js-id-wg-optbar-match-work-time" type="hidden" name="ACTION[0][ARGUMENTS][data][MATCH_WORK_TIME]" value="N" wfd-id="id94">

                                                                <a href="https://b24-hfbu5j.bitrix24.ru/settings/configs/" target="_blank">настроить</a>
                                                            </div>
                                                        </div>
                                                        <div class="task-options-field">
                                                            <div class="task-options-field-inner">
                                                                <label class="
    task-field-label
    js-id-hint-help
    js-id-wg-optbar-flag-label-task-control							" data-hint-enabled="" data-hint-text="">
                                                                    <span class="js-id-hint-help task-options-help tasks-icon-help tasks-help-cursor">Когда ответственный завершит задачу, она придет вам на проверку. Вы сможете принять работу (и тогда задача будет закрыта) или вернуть задачу на доработку.</span>
                                                                    <input data-target="task-control" data-flag-name="TASK_CONTROL" data-yes-value="Y" data-no-value="N" class="
    js-id-wg-optbar-flag
    js-id-wg-optbar-flag-task-control																		task-field-checkbox
    " type="checkbox" wfd-id="id95">Проконтролировать задачу после завершения </label>
                                                                <input class="js-id-wg-optbar-task-control" type="hidden" name="ACTION[0][ARGUMENTS][data][TASK_CONTROL]" value="N" wfd-id="id96">
                                                            </div>
                                                        </div>
                                                        <div class="task-options-field">
                                                            <div class="task-options-field-inner">
                                                                <label class="
    task-field-label
    js-id-hint-help
    js-id-wg-optbar-flag-label-add-to-favorite							" data-hint-enabled="" data-hint-text="">
                                                                    <span class="js-id-hint-help task-options-help tasks-icon-help tasks-help-cursor">Избранное - это ваш личный список задач, где вы можете сформировать план на день, неделю или месяц. В него попадают все отмеченные задачи, независимо от роли: Делаю, Помогаю, Поручил и т.д. Отметьте задачу, чтобы она появилась в этом списке.</span>
                                                                    <input data-target="add-to-favorite" data-flag-name="ADD_TO_FAVORITE" data-yes-value="Y" data-no-value="N" class="
    js-id-wg-optbar-flag
    js-id-wg-optbar-flag-add-to-favorite																		task-field-checkbox
    " type="checkbox" wfd-id="id97">Добавить себе в избранное </label>
                                                                <input class="js-id-wg-optbar-add-to-favorite" type="hidden" name="ACTION[0][ARGUMENTS][data][ADD_TO_FAVORITE]" value="" wfd-id="id98">


                                                            </div>
                                                        </div>
                                                        <div class="task-options-field">
                                                            <div class="task-options-field-inner">
                                                                <label class="
    task-field-label
    js-id-hint-help
    js-id-wg-optbar-flag-label-add-to-timeman							" data-hint-enabled="" data-hint-text="Вы не можете добавить задачу в план, если не являетесь постановщиком">
                                                                    <span class="js-id-hint-help task-options-help tasks-icon-help tasks-help-cursor">План на день находится в верхней части страницы, где указано текущее время. Добавьте задачу в план, чтобы спланировать свой рабочий день и иметь к ней быстрый доступ с любой страницы Битрикс24.</span>
                                                                    <input data-target="add-to-timeman" data-flag-name="ADD_TO_TIMEMAN" data-yes-value="Y" data-no-value="N" class="
    js-id-wg-optbar-flag
    js-id-wg-optbar-flag-add-to-timeman																		task-field-checkbox
    " type="checkbox" wfd-id="id99">Добавить в план рабочего дня </label>
                                                                <input class="js-id-wg-optbar-add-to-timeman" type="hidden" name="ACTION[0][ARGUMENTS][data][ADD_TO_TIMEMAN]" value="" wfd-id="id100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="task-options-field">
                                                        <div class="task-options-field-inner">
                                                            <label class="task-field-label"><span class="js-id-hint-help task-options-help tasks-icon-help tasks-help-cursor">Планируемые начало и завершение этой задачи будут автоматически определяться начальной датой самой ранней подзадачи и датой завершения самой поздней подзадачи.</span><input data-bx-id="task-edit-flag" data-target="task-param-1" data-flag-name="TASK_PARAM_1" class="task-field-checkbox" type="checkbox" wfd-id="id101">Сроки определяются сроками подзадач</label>
                                                            <input data-bx-id="task-edit-task-param-1" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][1][VALUE]" value="N" wfd-id="id102">
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][1][ID]" value="0" wfd-id="id103">
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][1][CODE]" value="1" wfd-id="id104">
                                                        </div>
                                                    </div>
                                                    <div class="task-options-field">
                                                        <div class="task-options-field-inner">
                                                            <label class="task-field-label"><span class="js-id-hint-help task-options-help tasks-icon-help tasks-help-cursor">Главная задача будет автоматически завершена после завершения всех её подзадач. При завершении главной задачи её подзадачи также завершатся.</span><input data-bx-id="task-edit-flag" data-target="task-param-2" data-flag-name="TASK_PARAM_2" class="task-field-checkbox" type="checkbox" wfd-id="id105">Автоматически завершать задачу при завершении подзадач (и наоборот)</label>
                                                            <input data-bx-id="task-edit-task-param-2" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][2][VALUE]" value="N" wfd-id="id106">
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][2][ID]" value="0" wfd-id="id107">
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][2][CODE]" value="2" wfd-id="id108">
                                                        </div>
                                                    </div>
                                                </div>
                                                <span data-bx-id="task-edit-chooser" data-target="options" class="task-option-fixedbtn"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-bx-id="task-edit-chosen-blocks" class="pinned">
                                <div data-bx-id="task-edit-se-project-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-timeman-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-se-reminder-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-se-template-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-se-projectdependence-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-uf-crm-task-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-se-parenttask-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-se-tag-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-epic-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-user-fields-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-se-relatedtask-block-place" class="task-edit-block-place">
                                </div>
                                <div data-bx-id="task-edit-se-require-result-block-place" class="task-edit-block-place">
                                    <div data-bx-id="task-edit-se-require-result-block" data-block-name="SE_REQUIRE_RESULT" class="pinable-block task-options-item task-options-item-se-require-result">
                                        <span data-bx-id="task-edit-chooser" data-target="se-require-result-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                        <span class="task-options-item-param">Результат задачи</span>
                                        <div class="task-options-item-open-inner">
                                            <div class="tasks">
                                                <label class="task-field-label task-field-label-tm">
                                                    <?= $arInf["taskResult"] ? '<input class="task-options-checkbox" data-bx-id="task-edit-flag" data-target="task-param-3" data-flag-name="TASK_PARAM_3" type="checkbox" wfd-id="id109" checked>' : '<input class="task-options-checkbox" data-bx-id="task-edit-flag" data-target="task-param-3" data-flag-name="TASK_PARAM_3" type="checkbox" wfd-id="id109">' ?>
                                                    Не завершать задачу без результата <input data-bx-id="task-edit-task-param-3" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][3][VALUE]" value="N" wfd-id="id110">
                                                    <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][3][ID]" value="0" wfd-id="id111">
                                                    <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARAMETER][3][CODE]" value="3" wfd-id="id112">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-bx-id="task-edit-additional" class="task-additional-block ">
                            <div data-bx-id="task-edit-additional-header" class="task-additional-alt opened">
                                <div class="task-additional-alt-more">
                                    Дополнительно </div>
                                <div class="task-additional-alt-promo">
                                    <span class="task-additional-alt-promo-text">Проект</span>
                                    <span class="task-additional-alt-promo-text">Учет времени</span>
                                    <span class="task-additional-alt-promo-text">Напомнить</span>
                                    <span class="task-additional-alt-promo-text">Повторять</span>
                                    <span class="task-additional-alt-promo-text">Гант</span>
                                    <span class="task-additional-alt-promo-text">CRM</span>
                                    <span class="task-additional-alt-promo-text">Подзадача</span>
                                    <span class="task-additional-alt-promo-text">Теги</span>
                                    <span class="task-additional-alt-promo-text">Поля</span>
                                </div>
                            </div>
                            <div data-bx-id="task-edit-unchosen-blocks" class="task-options task-options-more task-openable-block" style="">
                                <div data-bx-id="task-edit-se-project-block-place" data-block-name="SE_PROJECT" data-group-id="0" class="task-edit-block-place ">
                                    <div data-bx-id="task-edit-se-project-block" data-block-name="SE_PROJECT" class="pinable-block task-options-item task-options-item-se-project">
                                        <span data-bx-id="task-edit-chooser" data-target="se-project-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                        <span class="task-options-item-param">Проект</span>
                                        <?= $arInf["project"] ? '<div class="task-options-item-open-inner"> <div id="bx-component-scope-livefeed_task_form-project" class="tasks task-form-field block t-filled tdp-mem-sel-is-empty-false t-max tdp-mem-sel-is-max" style="max-width: 786px"><span class="js-id-tdp-mem-sel-is-items tasks-h-invisible"><script type="text/html" data-bx-id="tdp-mem-sel-is-item"><span class="js-id-tdp-mem-sel-is-item js-id-tdp-mem-sel-is-item-{{VALUE}} task-form-field-item {{ITEM_SET_INVISIBLE}}"data-item-value="{{VALUE}}" data-bx-type="{{TYPE_SET}}"><a class="task-form-field-item-text task-options-destination-text" href="{{URL}}">{{DISPLAY}}</a><span class="js-id-tdp-mem-sel-is-item-delete task-form-field-item-delete" title="Отменить выбор"></span></span></script><span class="js-id-tdp-mem-sel-is-item js-id-tdp-mem-sel-is-item-SG2 task-form-field-item" data-item-value="SG2" data-bx-type="" style=""><a class="task-form-field-item-text task-options-destination-text" href="/workgroups/group/2/card/">' . $arInf["project"] . '</a><span class="js-id-tdp-mem-sel-is-item-delete task-form-field-item-delete" title="Отменить выбор"></span></span></span><span class="task-form-field-controls"><span class="task-form-field-loading">Загрузка...</span><input class="js-id-tdp-mem-sel-is-search js-id-network-selector-search task-form-field-search task-form-field-input" type="text" value="" autocomplete="off" data-groupid="0" data-role="U"><a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-when-filled task-form-field-link ">Сменить			    </a><a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-when-empty task-form-field-link add">Добавить</a></span><input class="js-id-tdp-mem-sel-sole-input" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PROJECT][ID]" value="2"></div></div>' : '<div class="task-options-item-open-inner"><div id="bx-component-scope-livefeed_task_form-project" class="tasks task-form-field block t-empty tdp-mem-sel-is-empty-true t-min tdp-mem-sel-is-min" style="max-width: 786px"><span class="js-id-tdp-mem-sel-is-items tasks-h-invisible"><script type="text/html" data-bx-id="tdp-mem-sel-is-item"><span class="js-id-tdp-mem-sel-is-item js-id-tdp-mem-sel-is-item-{{VALUE}} task-form-field-item {{ITEM_SET_INVISIBLE}}"data-item-value="{{VALUE}}" data-bx-type="{{TYPE_SET}}"><a class="task-form-field-item-text task-options-destination-text" href="{{URL}}">{{DISPLAY}}</a><span class="js-id-tdp-mem-sel-is-item-delete task-form-field-item-delete" title="Отменить выбор"></span></span></script></span><span class="task-form-field-controls"><span class="task-form-field-loading">Загрузка...</span><input class="js-id-tdp-mem-sel-is-search js-id-network-selector-search task-form-field-search task-form-field-input" type="text" value="" autocomplete="off" data-groupid="0" data-role="U"><a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-when-filled task-form-field-link ">Сменить			    </a><a href="javascript:void(0);" class="js-id-tdp-mem-sel-is-control task-form-field-when-empty task-form-field-link add">Добавить			    </a></span><input class="js-id-tdp-mem-sel-sole-input" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PROJECT][ID]" value=""></div></div>' ?>
                                        <div class="" style="margin-left:24px; display:inline-block;">
                                            <a class="js-id-add-project" href="https://b24-hfbu5j.bitrix24.ru/company/personal/user/1/groups/create/?firstRow=project&amp;refresh=N">
                                                Создать проект </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-bx-id="task-edit-timeman-block-place" data-block-name="TIMEMAN" data-group-id="0" class="task-edit-block-place ">
                                    <div data-bx-id="task-edit-timeman-block" data-block-name="TIMEMAN" class="pinable-block task-options-item task-options-item-timeman">
                                        <span data-bx-id="task-edit-chooser" data-target="timeman-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                        <span class="task-options-item-param">Учет времени</span>
                                        <div class="task-options-item-open-inner">
                                            <div id="bx-component-scope-bitrix_tasks_widget_timeestimate_1" class="tasks">
                                                <label class="task-field-label task-field-label-tm">
                                                    <?= $arInf["timeTracking"] ?
                                                        '<input class="js-id-timeestimate-flag task-options-checkbox" data-target="allow-time-tracking" data-flag-name="ALLOW_TIME_TRACKING" type="checkbox" wfd-id="id115" checked>' : '<input class="js-id-timeestimate-flag task-options-checkbox" data-target="allow-time-tracking" data-flag-name="ALLOW_TIME_TRACKING" type="checkbox" wfd-id="id115">' ?>
                                                    Время для выполнения задачи</label>
                                                <input class="js-id-timeestimate-allow-time-tracking" type="hidden" name="ACTION[0][ARGUMENTS][data][ALLOW_TIME_TRACKING]" value="N" wfd-id="id116">
                                                <span class="js-id-timeestimate-inputs task-options-inp-container-time task-openable-block invisible">
                                                    <span class="task-options-inp-container">
                                                        <input type="text" class="js-id-timeestimate-time js-id-timeestimate-hour task-options-inp" value="" wfd-id="id117">
                                                    </span>
                                                    часов <span class="task-options-inp-container">
                                                        <input type="text" class="js-id-timeestimate-time js-id-timeestimate-minute task-options-inp" value="" wfd-id="id118">
                                                    </span>
                                                    минут <input class="js-id-timeestimate-second" type="hidden" name="ACTION[0][ARGUMENTS][data][TIME_ESTIMATE]" value="0" wfd-id="id119">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-bx-id="task-edit-se-reminder-block-place" data-block-name="SE_REMINDER" data-group-id="0" class="task-edit-block-place ">
                                    <div data-bx-id="task-edit-se-reminder-block" data-block-name="SE_REMINDER" class="pinable-block task-options-item task-options-item-se-reminder">
                                        <span data-bx-id="task-edit-chooser" data-target="se-reminder-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                        <span class="task-options-item-param">Напомнить о задаче</span>
                                        <div class="task-options-item-open-inner">
                                            <div class="task-options-reminder">

                                                <div id="bx-component-scope-reminder-livefeed_task_form" class="t-filled reminder-empty-false">

                                                    <div data-bx-id="reminder-items">

                                                        <script type="text/html" data-bx-id="reminder-item">
                                                            <span data-bx-id="reminder-item" data-item-value="{{VALUE}}" class="task-reminder-container {{ITEM_SET_INVISIBLE}}">
                                                                <span data-bx-id="item-info" class="task-reminder-info {{TRANSPORT_CLASS}}">
                                                                    <span data-bx-id="item-edit" class="task-reminder-info-text">{{REMINDER_TEXT}}</span><span data-bx-id="reminder-item-delete" class="task-reminder-inp-del" title="Удалить"></span>
                                                                </span>

                                                                <input data-bx-id="item-transport" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_REMINDER][{{VALUE}}][TRANSPORT]" value="{{TRANSPORT}}" />
                                                                <input data-bx-id="item-recipient-type" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_REMINDER][{{VALUE}}][RECEPIENT_TYPE]" value="{{RECEPIENT_TYPE}}" />
                                                                <input data-bx-id="item-remind-date" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_REMINDER][{{VALUE}}][REMIND_DATE]" value="{{REMIND_DATE}}" />
                                                                <input data-bx-id="item-type" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_REMINDER][{{VALUE}}][TYPE]" value="{{TYPE}}" />
                                                            </span>
                                                        </script>
                                                        <?php
                                                        if ($arInf["remindAboutTask"]) {
                                                            foreach($arInf["remindAboutTask"] as $key => $value) {
                                                        echo '<span data-bx-id="reminder-item" data-item-value="1" class="task-reminder-container" style="">
                                                            <span data-bx-id="item-info" class="task-reminder-info transport-j">
                                                                <span data-bx-id="item-edit" class="task-reminder-info-text">' . $value . '</span><span data-bx-id="reminder-item-delete" class="task-reminder-inp-del" title="Удалить"></span>
                                                            </span>

                                                            <input data-bx-id="item-transport" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_REMINDER][1][TRANSPORT]" value="J">
                                                            <input data-bx-id="item-recipient-type" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_REMINDER][1][RECEPIENT_TYPE]" value="R">
                                                            <input data-bx-id="item-remind-date" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_REMINDER][1][REMIND_DATE]" value="02.02.2024 09:00:00">
                                                            <input data-bx-id="item-type" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_REMINDER][1][TYPE]" value="A">
                                                        </span>';
                                                            }}?>
                                                    </div>


                                                    <div class="task-dashed-link">
                                                        + <span data-bx-id="reminder-open-form" class="task-dashed-link-inner">Добавить напоминание</span>
                                                        <span class="task-field-label">сообщением или по e-mail</span>
                                                    </div>


                                                    <div class="hidden">

                                                    </div>

                                                    <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_REMINDER][]" value="">

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-bx-id="task-edit-se-template-block-place" data-block-name="SE_TEMPLATE" data-group-id="0" class="task-edit-block-place ">
                                    <div data-bx-id="task-edit-se-template-block" data-block-name="SE_TEMPLATE" class="pinable-block task-options-item task-options-item-se-template task-options-item-open">
                                        <span data-bx-id="task-edit-chooser" data-target="se-template-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                        <span class="task-options-item-param">Повторять задачу</span>
                                        <div data-bx-id="task-edit-replication-block" class="task-options-item-open-inner">
                                            <label class="task-field-label task-field-label-repeat ">
                                                <?= $arInf["repeatTask"] ?
                                                    '<input data-bx-id="task-edit-flag task-edit-flag-replication" data-target="replication" data-flag-name="REPLICATE" class="task-options-checkbox" type="checkbox" wfd-id="id124" checked>' : '<input data-bx-id="task-edit-flag task-edit-flag-replication" data-target="replication" data-flag-name="REPLICATE" class="task-options-checkbox" type="checkbox" wfd-id="id124">' ?>
                                                Сделать задачу регулярной <input data-bx-id="task-edit-replication" type="hidden" name="ACTION[0][ARGUMENTS][data][REPLICATE]" value="N" wfd-id="id125">
                                            </label>
                                            <div data-bx-id="task-edit-replication-panel" class="task-options-repeat task-openable-block invisible">
                                                <div id="bx-component-scope-replication-livefeed_task_form" class="tasks task-options-repeat period-daily">
                                                    <div class="task-options-field">
                                                        <span class="task-option-fn">повторяемость</span>
                                                        <span class="js-id-replication-period-type-selector tasks-option-tab-container">
                                                            <span class="js-id-replication-period-type-option tasks-option-tab daily" data-type="daily">день</span>
                                                            <span class="js-id-replication-period-type-option tasks-option-tab weekly" data-type="weekly">неделя</span>
                                                            <span class="js-id-replication-period-type-option tasks-option-tab monthly" data-type="monthly">месяц</span>
                                                            <span class="js-id-replication-period-type-option tasks-option-tab yearly" data-type="yearly">год</span>
                                                        </span>
                                                        <input class="js-id-replication-period-type" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][PERIOD]" value="daily" wfd-id="id126">
                                                    </div>
                                                    <div class="js-id-replication-panel task-replication-panel">
                                                        <div class="js-id-replication-panel-daily task-replication-params opacity-1">
                                                            <div class="task-options-field">
                                                                <span class="task-option-fn">каждый</span>
                                                                <span class="task-options-inp-container task-options-inp-int">
                                                                    <input type="text" class="js-id-replication-every-day task-options-inp" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][EVERY_DAY]" value="1" wfd-id="id127">
                                                                </span>
                                                                <span class="task-options-inp-container task-options-inp-container-period">
                                                                    <select name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][WORKDAY_ONLY]" class="js-id-replication-day-type task-options-inp">
                                                                        <option value="Y">рабочий</option>
                                                                        <option value="N" selected="">любой</option>
                                                                    </select>
                                                                </span>
                                                                <span class="task-option-fn">день с интервалом</span>
                                                                <span class="task-options-inp-container task-options-inp-int">
                                                                    <input type="text" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][DAILY_MONTH_INTERVAL]" value="0" class="js-id-replication-daily-month-interval task-options-inp" wfd-id="id128">
                                                                </span>
                                                                <span class="task-option-fn">мес</span>
                                                            </div>
                                                        </div>
                                                        <div class="js-id-replication-panel-weekly task-replication-params nodisplay">
                                                            <div class="task-options-field">
                                                                <span class="task-option-fn">каждую</span>
                                                                <span class="task-options-inp-container task-options-inp-int">
                                                                    <input type="text" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][EVERY_WEEK]" class="js-id-replication-every-week task-options-inp" value="1" wfd-id="id129">
                                                                </span>
                                                                <span class="task-option-fn">неделю</span>
                                                            </div>
                                                            <div class="task-options-field">
                                                                <div class="task-options-day-container">
                                                                    <label class="task-options-day"><input class="js-id-replication-week-days" type="checkbox" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][WEEK_DAYS][]" value="1" wfd-id="id130">&nbsp;пн</label>
                                                                    <label class="task-options-day"><input class="js-id-replication-week-days" type="checkbox" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][WEEK_DAYS][]" value="2" wfd-id="id131">&nbsp;вт</label>
                                                                    <label class="task-options-day"><input class="js-id-replication-week-days" type="checkbox" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][WEEK_DAYS][]" value="3" wfd-id="id132">&nbsp;ср</label>
                                                                    <label class="task-options-day"><input class="js-id-replication-week-days" type="checkbox" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][WEEK_DAYS][]" value="4" wfd-id="id133">&nbsp;чт</label>
                                                                    <label class="task-options-day"><input class="js-id-replication-week-days" type="checkbox" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][WEEK_DAYS][]" value="5" wfd-id="id134">&nbsp;пт</label>
                                                                    <label class="task-options-day"><input class="js-id-replication-week-days" type="checkbox" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][WEEK_DAYS][]" value="6" wfd-id="id135">&nbsp;сб</label>
                                                                    <label class="task-options-day"><input class="js-id-replication-week-days" type="checkbox" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][WEEK_DAYS][]" value="7" wfd-id="id136">&nbsp;вс</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="js-id-replication-panel-monthly task-replication-params nodisplay">
                                                            <div class="task-options-field">
                                                                <input id="replication-monthly-type-1" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][MONTHLY_TYPE]" value="1" checked="" class="js-id-replication-monthly-type task-options-radio" type="radio" wfd-id="id137">
                                                                <label class="task-field-label" for="replication-monthly-type-1">каждое</label>
                                                                <span class="task-options-inp-container task-options-inp-int">
                                                                    <input name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][MONTHLY_DAY_NUM]" value="1" type="text" class="js-id-replication-monthly-day-num task-options-inp" wfd-id="id138">
                                                                </span>
                                                                <label class="task-field-label" for="replication-monthly-type-1">число каждого</label>
                                                                <span class="task-options-inp-container task-options-inp-int">
                                                                    <input name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][MONTHLY_MONTH_NUM_1]" value="1" type="text" class="js-id-replication-monthly-month-num-1 task-options-inp" wfd-id="id139">
                                                                </span>
                                                                <label class="task-field-label" for="replication-monthly-type-1">месяца</label>
                                                            </div>
                                                            <div class="task-options-field">
                                                                <input id="replication-monthly-type-2" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][MONTHLY_TYPE]" value="2" class="js-id-replication-monthly-type task-options-radio" type="radio" wfd-id="id140">
                                                                <label class="task-field-label" for="replication-monthly-type-2">каждый</label>
                                                                <span class="task-options-inp-container task-options-inp-container-period">
                                                                    <select name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][MONTHLY_WEEK_DAY_NUM]" class="js-id-replication-monthly-week-day-num task-options-inp">
                                                                        <option value="0" selected="">первый</option>
                                                                        <option value="1">второй</option>
                                                                        <option value="2">третий</option>
                                                                        <option value="3">четвертый</option>
                                                                        <option value="4">последний</option>
                                                                    </select>
                                                                </span>
                                                                <span class="task-options-inp-container task-options-inp-container-period">
                                                                    <select name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][MONTHLY_WEEK_DAY]" class="js-id-replication-monthly-week-day task-options-inp">
                                                                        <option value="0" selected="">понедельник</option>
                                                                        <option value="1">вторник</option>
                                                                        <option value="2">среда</option>
                                                                        <option value="3">четверг</option>
                                                                        <option value="4">пятница</option>
                                                                        <option value="5">суббота</option>
                                                                        <option value="6">воскресенье</option>
                                                                    </select>
                                                                </span>
                                                                <label class="task-field-label" for="replication-monthly-type-2">каждого</label>
                                                                <span class="task-options-inp-container task-options-inp-int">
                                                                    <input type="text" class="js-id-replication-monthly-month-num-2 task-options-inp" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][MONTHLY_MONTH_NUM_2]" value="1" wfd-id="id141">
                                                                </span>
                                                                <label class="task-field-label" for="replication-monthly-type-2">месяца</label>
                                                            </div>
                                                        </div>

                                                        <div class="js-id-replication-panel-yearly task-replication-params nodisplay">
                                                            <div class="task-options-field">
                                                                <input id="replication-yearly-type-1" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][YEARLY_TYPE]" value="1" checked="" class="js-id-replication-yearly-type task-options-radio" type="radio" wfd-id="id142">
                                                                <label class="task-field-label" for="replication-yearly-type-1">каждый</label>
                                                                <span class="task-options-inp-container task-options-inp-int">
                                                                    <input name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][YEARLY_DAY_NUM]" value="1" type="text" class="js-id-replication-yearly-day-num task-options-inp" wfd-id="id143">
                                                                </span>
                                                                <label class="task-field-label" for="replication-yearly-type-1">день месяца</label>
                                                                <span class="task-options-inp-container task-options-inp-container-period">
                                                                    <select name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][YEARLY_MONTH_1]" class="js-id-replication-yearly-month-1 task-options-inp">
                                                                        <option value="0" selected="">январь</option>
                                                                        <option value="1">февраль</option>
                                                                        <option value="2">март</option>
                                                                        <option value="3">апрель</option>
                                                                        <option value="4">май</option>
                                                                        <option value="5">июнь</option>
                                                                        <option value="6">июль</option>
                                                                        <option value="7">август</option>
                                                                        <option value="8">сентябрь</option>
                                                                        <option value="9">октябрь</option>
                                                                        <option value="10">ноябрь</option>
                                                                        <option value="11">декабрь</option>
                                                                    </select>
                                                                </span>
                                                            </div>
                                                            <div class="task-options-field">
                                                                <input id="replication-yearly-type-2" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][YEARLY_TYPE]" value="2" class="js-id-replication-yearly-type task-options-radio" type="radio" wfd-id="id144">
                                                                <label class="task-field-label" for="replication-yearly-type-2">каждый</label>
                                                                <span class="task-options-inp-container task-options-inp-container-period">
                                                                    <select name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][YEARLY_WEEK_DAY_NUM]" class="js-id-replication-yearly-week-day-num task-options-inp">
                                                                        <option value="0" selected="">первый</option>
                                                                        <option value="1">второй</option>
                                                                        <option value="2">третий</option>
                                                                        <option value="3">четвертый</option>
                                                                        <option value="4">последний</option>
                                                                    </select>
                                                                </span>
                                                                <span class="task-options-inp-container task-options-inp-container-period">
                                                                    <select name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][YEARLY_WEEK_DAY]" class="js-id-replication-yearly-week-day task-options-inp">
                                                                        <option value="0" selected="">понедельник</option>
                                                                        <option value="1">вторник</option>
                                                                        <option value="2">среда</option>
                                                                        <option value="3">четверг</option>
                                                                        <option value="4">пятница</option>
                                                                        <option value="5">суббота</option>
                                                                        <option value="6">воскресенье</option>
                                                                    </select>
                                                                </span>
                                                                <label class="task-field-label" for="replication-yearly-type-2">месяца</label>
                                                                <span class="task-options-inp-container task-options-inp-container-period">
                                                                    <select name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][YEARLY_MONTH_2]" class="js-id-replication-yearly-month-2 task-options-inp">
                                                                        <option value="0" selected="">январь</option>
                                                                        <option value="1">февраль</option>
                                                                        <option value="2">март</option>
                                                                        <option value="3">апрель</option>
                                                                        <option value="4">май</option>
                                                                        <option value="5">июнь</option>
                                                                        <option value="6">июль</option>
                                                                        <option value="7">август</option>
                                                                        <option value="8">сентябрь</option>
                                                                        <option value="9">октябрь</option>
                                                                        <option value="10">ноябрь</option>
                                                                        <option value="11">декабрь</option>
                                                                    </select>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="task-options-field">
                                                        <div class="task-options-field task-options-field-left">
                                                            <label for="" class="task-field-label task-field-label-br">Время создания задачи:</label>
                                                            <span class="js-id-replication-timepicker task-options-inp-container task-options-inp-container-period task-options-inp-container-timer">
                                                                <input type="text" class="js-id-timepicker-display task-options-inp" readonly="readonly" wfd-id="id145">
                                                                <input class="js-id-replication-time js-id-timepicker-value" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][TIME]" type="hidden" value="05:00" wfd-id="id146">
                                                                <div class="task-main-clock-monkeyfix">
                                                                    <!-- <input id="6e5dac6e21b62215582a63a72359a57a" name="6e5dac6e21b62215582a63a72359a57a" type="text" value="05:00" size="4" autocomplete="off" wfd-id="id147"><a href="javascript:void(0);" onclick="bxShowClock_6e5dac6e21b62215582a63a72359a57a()" title="Указать время" onmouseover="this.className=&#39;bxc-icon-hover&#39;;" onmouseout="this.className=&#39;&#39;;"><img id="6e5dac6e21b62215582a63a72359a57a_icon" src="./news_files/1.gif" class="bx-clock-icon bxc-iconkit-c"></a> -->
                                                                </div>
                                                            </span>
                                                            <span class="js-id-hint-help task-options-timezone-indicator">Время создания задачи указано во временной зоне UTC +03:00.</span>
                                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][TIMEZONE_OFFSET]" value="0" wfd-id="id148">
                                                        </div>
                                                        <div class="task-options-field task-options-field-left">
                                                            <label for="" class="task-field-label task-field-label-br">Начинать повторение:</label>
                                                            <span class="js-id-replication-start-date-datepicker task-options-inp-container task-options-date t-empty">
                                                                <input type="text" class="js-id-datepicker-display task-options-inp" value="" readonly="readonly" wfd-id="id149">
                                                                <span class="js-id-datepicker-clear task-option-inp-del"></span>
                                                                <input class="js-id-datepicker-value" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][START_DATE]" value="" wfd-id="id150">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="task-options-field task-options-field-nol">
                                                        <label for="" class="task-field-label task-field-label-br">Повторять до:</label>
                                                        <div class="task-options-field task-options-field-left">
                                                            <input name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][REPEAT_TILL]" value="endless" class="js-id-replication-repeat-till task-options-radio" id="replication-repeat-constraint-none" type="radio" checked="" wfd-id="id151">
                                                            <span class="task-option-fn"><label for="replication-repeat-constraint-none" class="task-field-label">нет даты окончания</label></span>
                                                        </div>
                                                        <div class="task-options-field task-options-field-left">
                                                            <input name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][REPEAT_TILL]" value="date" class="js-id-replication-repeat-till task-options-radio" id="replication-repeat-constraint-date" type="radio" wfd-id="id152">
                                                            <span class="task-option-fn"><label for="replication-repeat-constraint-date" class="task-field-label">дата окончания</label></span>
                                                            <span class="js-id-replication-end-date-datepicker task-options-inp-container task-options-date t-empty">
                                                                <input type="text" class="js-id-datepicker-display task-options-inp" value="" readonly="readonly" wfd-id="id153">
                                                                <span class="js-id-datepicker-clear task-option-inp-del"></span>
                                                                <input class="js-id-datepicker-value" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][END_DATE]" value="" wfd-id="id154">
                                                            </span>
                                                        </div>
                                                        <div class="task-options-field task-options-field-left">
                                                            <input name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][REPEAT_TILL]" value="times" class="js-id-replication-repeat-till task-options-radio" id="replication-repeat-constraint-times" type="radio" wfd-id="id155">
                                                            <span class="task-option-fn"><label for="replication-repeat-constraint-times" class="task-field-label">завершить после</label></span>
                                                            <span class="task-options-inp-container task-options-inp-int">
                                                                <input type="text" name="ACTION[0][ARGUMENTS][data][SE_TEMPLATE][REPLICATE_PARAMS][TIMES]" class="js-id-replication-times task-options-inp" value="0" wfd-id="id156">
                                                            </span>
                                                            <span class="task-option-fn"><label class="task-field-label">повторений</label></span>
                                                        </div>
                                                    </div>
                                                    <div class="task-options-field-fn task-options-field-ok"><span class="js-id-replication-hint">Задача повторяется в 05:00 (UTC +03:00) каждый день с момента сохранения, без даты окончания.</span></div>
                                                </div>
                                                <div class="task-options-field-fn task-options-field-norm">
                                                    Внимание! На основании задачи будет создан новый шаблон, с указанными параметрами повторения. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-bx-id="task-edit-se-projectdependence-block-place" data-block-name="SE_PROJECTDEPENDENCE" data-group-id="0" class="task-edit-block-place ">
                                    <div data-bx-id="task-edit-se-projectdependence-block" data-block-name="SE_PROJECTDEPENDENCE" class="pinable-block task-options-item task-options-item-se-projectdependence task-options-item-open">
                                        <span data-bx-id="task-edit-chooser" data-target="se-projectdependence-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                        <span class="task-options-item-param">Гант</span>
                                        <div class="task-options-item-open-inner">
                                            <div id="bx-component-scope-projectdependence-livefeed_task_form" class="t-empty t-min projdep-item-set-min projdep-item-set-empty-true">
                                                <table data-bx-id="projdep-item-set-container" class="task-options-task-other hidden">
                                                    <thead>
                                                        <tr>
                                                            <td></td>
                                                            <td>Действие</td>
                                                            <td></td>
                                                            <td>Действие</td>
                                                            <td>Предшествующие задачи</td>
                                                            <td></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-bx-id="projdep-item-set-items">
                                                        <script type="text/html" data-bx-id="projdep-item-set-item">
                                                            <tr data-bx-id="projdep-item-set-item" data-item-value="{{VALUE}}" class="{{ITEM_SET_INVISIBLE}}">
                                                                <td>
                                                                    <span class="task-option-fn">Текущая задача</span>
                                                                </td>
                                                                <td>
                                                                    <span class="task-options-inp-container">
                                                                        <select data-bx-id="item-type-left" class="task-options-inp">
                                                                            <option value="s" {{R_START}}>начнётся</option>
                                                                            <option value="f" {{R_FINISH}}>завершится</option>
                                                                        </select>
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span class="task-option-fn">когда</span>
                                                                </td>
                                                                <td>
                                                                    <span class="task-options-inp-container">
                                                                        <select data-bx-id="item-type-right" class="task-options-inp">
                                                                            <option value="s" {{L_START}}>начнётся</option>
                                                                            <option value="f" {{L_FINISH}}>завершится</option>
                                                                        </select>
                                                                    </span>
                                                                </td>
                                                                <td><a href="/company/personal/user/1/tasks/task/view/{{DEPENDS_ON_ID}}/" target="_blank" class="task-options-task-name">{{DEPENDS_ON_TITLE}}</a></td>

                                                                <td>
                                                                    <input data-bx-id="item-type" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PROJECTDEPENDENCE][{{VALUE}}][TYPE]" value="{{TYPE}}" />
                                                                    <input data-bx-id="item-task-id" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PROJECTDEPENDENCE][{{VALUE}}][DEPENDS_ON_ID]" value="{{DEPENDS_ON_ID}}" />

                                                                    <span data-bx-id="projdep-item-set-item-delete" class="task-options-title-del" title="Удалить"></span>
                                                                </td>
                                                            </tr>
                                                        </script>
                                                    </tbody>
                                                </table>
                                                <span class="task-dashed-link ">
                                                    <span data-bx-id="projdep-item-set-open-form" class="task-dashed-link-inner">Добавить предшествующую задачу</span>
                                                </span>
                                                <div data-bx-id="projdep-item-set-picker-content" class="hidden-soft">
                                                    <div class="finder-box" id="7a02d41c52d1a3b465f991eb75167855_selector_content">
                                                        <table class="finder-box-layout">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="finder-box-left-column">
                                                                        <div class="finder-box-search">
                                                                            <input class="finder-box-search-textbox" name="7a02d41c52d1a3b465f991eb75167855_task_input" id="7a02d41c52d1a3b465f991eb75167855_task_input" wfd-id="id157">
                                                                        </div>

                                                                        <div class="finder-box-tabs">
                                                                            <!-- <span class="finder-box-tab finder-box-tab-selected" id="7a02d41c52d1a3b465f991eb75167855_tab_last" onclick="O_7a02d41c52d1a3b465f991eb75167855.displayTab(&#39;last&#39;);"> -->
                                                                            <span class="finder-box-tab-left"></span>
                                                                            <span class="finder-box-tab-text">Последние</span>
                                                                            <span class="finder-box-tab-right"></span>
                                                                            </span>
                                                                            <!-- <span class="finder-box-tab" id="7a02d41c52d1a3b465f991eb75167855_tab_search" onclick="O_7a02d41c52d1a3b465f991eb75167855.displayTab(&#39;search&#39;);"> -->
                                                                            <span class="finder-box-tab-left"></span>
                                                                            <span class="finder-box-tab-text">Поиск</span>
                                                                            <span class="finder-box-tab-right"></span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="popup-window-hr popup-window-buttons-hr"><i></i></div>
                                                                        <div class="finder-box-tabs-content">
                                                                            <div class="finder-box-tab-content finder-box-tab-content-selected" id="7a02d41c52d1a3b465f991eb75167855_last">
                                                                                <table class="finder-box-tab-columns">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="finder-box-item" id="7a02d41c52d1a3b465f991eb75167855_last_task_2" onclick="O_7a02d41c52d1a3b465f991eb75167855.select(event)">
                                                                                                    <input class="tasks-hidden-input" type="radio" name="7a02d41c52d1a3b465f991eb75167855" value="2" wfd-id="id158">
                                                                                                    <div class="finder-box-item-text">Скачать приложение Битрикс24 [2]</div>
                                                                                                    <div class="finder-box-item-icon"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="finder-box-tab-content" id="7a02d41c52d1a3b465f991eb75167855_search"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PROJECTDEPENDENCE][]" value="" wfd-id="id159">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-bx-id="task-edit-uf-crm-task-block-place" data-block-name="UF_CRM_TASK" data-group-id="0" class="task-edit-block-place ">
                                    <div data-bx-id="task-edit-uf-crm-task-block" data-block-name="UF_CRM_TASK" class="pinable-block task-options-item task-options-item-uf-crm-task">
                                        <span data-bx-id="task-edit-chooser" data-target="uf-crm-task-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                        <span class="task-options-item-param">CRM</span>
                                        <?php
                                        if ($arInf["CRM"]) {
                                            echo '
                                                <div class="task-options-item-open-inner task-edit-crm-block">
                                                <div id="crm-action[0][arguments][data][uf-crm-task]cODy3K1706618785-box" data-has-input="no">
                                                <span id="crm-action[0][arguments][data][uf-crm-task]cODy3K1706618785-open">
                                                <span id="main-user-selector-action[0][arguments][data][uf-crm-task]cODy3K1706618785" class="main-user-selector-wrap">
                                                <span id="ui-tile-selector-action[0][arguments][data][uf-crm-task]cODy3K1706618785" class="ui-tile-selector-selector-wrap">
                                                <span id="ui-tile-selector-action[0][arguments][data][uf-crm-task]cODy3K1706618785-mask" class="ui-tile-selector-selector-mask"></span>
                                                <script data-role="tile-template" type="text/html">
                                                <span data-role="tile-item" data-bx-id="%id%" data-bx-data="%data%" class="ui-tile-selector-item ui-tile-selector-item-%type% ui-tile-selector-item-readonly-%readonly%" style="%style%">
                                                <span data-role="tile-item-name">%name%</span>
                                                    <span data-role="remove" class="ui-tile-selector-item-remove"></span>
                                                </span>
                                                </script>

                                                <script data-role="popup-category-template" type="text/html">
                                                <div class="ui-tile-selector-searcher-sidebar-item">%name%</div>
                                                </script>

                                                <script data-role="popup-item-template" type="text/html">
                                                <div class="ui-tile-selector-searcher-content-item" title="%name%">%name%</div>
                                                </script>

                                                <script data-role="popup-template" type="text/html">
                                                <div class="ui-tile-selector-searcher">
                                                <div class="ui-tile-selector-searcher-container">
                                                <div data-role="popup-title" class="ui-tile-selector-searcher-title"></div>
                                                <div class="ui-tile-selector-searcher-inner">
                                                <div class="ui-tile-selector-searcher-main ui-tile-selector-searcher-inner-shadow">
                                                <div data-role="popup-item-list" class="ui-tile-selector-searcher-content" style="display: none;"></div>
                                                <svg data-role="popup-loader" class="ui-tile-selector-searcher-circular" viewBox="25 25 50 50">
                                                    <circle class="ui-tile-selector-searcher-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"/>
                                                    <circle class="ui-tile-selector-searcher-inner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"/>
                                                </svg>
                                                </div>
                                                <div data-role="popup-category-list" class="ui-tile-selector-searcher-sidebar" style="display: none;"></div>
                                                </div>
                                                </div>
                                                </div>
                                                </script>

                                                <span data-role="tile-container" class="ui-tile-selector-selector">
                                            ';
                                            foreach ($arInf["CRM"] as $key => $value) {
                                                echo '
                                                    <span data-role="tile-item" data-bx-id="C_2" data-bx-data="{&quot;readonly&quot;:false,&quot;entityType&quot;:&quot;CONTACTS&quot;,&quot;url&quot;:&quot;/crm/contact/details/2/&quot;,&quot;urlUseSlider&quot;:&quot;Y&quot;,&quot;state&quot;:&quot;select&quot;}" class="ui-tile-selector-item ui-tile-selector-item-contacts ui-tile-selector-item-readonly-no" style="">
                                                    <span data-role="tile-item-name">' . $arInf["CRM"][$key] . '</span>
                                                        <span data-role="remove" class="ui-tile-selector-item-remove"></span>
                                                    </span>
                                                ';
                                            }
                                            echo '
                                                <span data-role="tile-more" class="ui-tile-selector-more" style="display: none;">
                                                <span data-role="tile-item-name">...</span>
                                                </span>
                                                <input data-role="tile-input" type="text" class="ui-tile-selector-input" autocomplete="off" style="display: none;" id="ACTION[0][ARGUMENTS][data][UF_CRM_TASK][]-action[0][arguments][data][uf-crm-task]cODy3K1706618785-search-input" data-bxchangehandler="Y" wfd-id="id160">

                                                <span class="ui-tile-selector-select-container">
                                                <span data-role="tile-select" class="ui-tile-selector-select" style="">выбрать</span>
                                                </span>
                                                </span>
                                                </span>																	
                                                <input type="hidden" name="ACTION[0][ARGUMENTS][data][UF_CRM_TASK][]" value="C_2">
                                                </span>		
                                                </span>
                                                </div>
                                                </div>
                                            ';
                                        } else {
                                            echo '
                                                    <div class="task-options-item-open-inner task-edit-crm-block">
                                                    <div id="crm-action[0][arguments][data][uf-crm-task]cODy3K1706618785-box" data-has-input="no">
                                                    <span id="crm-action[0][arguments][data][uf-crm-task]cODy3K1706618785-open">
                                                    <span id="main-user-selector-action[0][arguments][data][uf-crm-task]cODy3K1706618785" class="main-user-selector-wrap">
                                                    <span id="ui-tile-selector-action[0][arguments][data][uf-crm-task]cODy3K1706618785" class="ui-tile-selector-selector-wrap">
                                                    <span id="ui-tile-selector-action[0][arguments][data][uf-crm-task]cODy3K1706618785-mask" class="ui-tile-selector-selector-mask"></span>

                                                    <script data-role="tile-template" type="text/html">
                                                    <span data-role="tile-item" data-bx-id="%id%" data-bx-data="%data%" class="ui-tile-selector-item ui-tile-selector-item-%type% ui-tile-selector-item-readonly-%readonly%" style="%style%">
                                                    <span data-role="tile-item-name">%name%</span>
                                                    <span data-role="remove" class="ui-tile-selector-item-remove"></span>
                                                    </span>
                                                    </script>

                                                    <script data-role="popup-category-template" type="text/html">
                                                    <div class="ui-tile-selector-searcher-sidebar-item">%name%</div>
                                                    </script>

                                                    <script data-role="popup-item-template" type="text/html">
                                                    <div class="ui-tile-selector-searcher-content-item" title="%name%">%name%</div>
                                                    </script>

                                                    <script data-role="popup-template" type="text/html">
                                                    <div class="ui-tile-selector-searcher">
                                                    <div class="ui-tile-selector-searcher-container">
                                                    <div data-role="popup-title" class="ui-tile-selector-searcher-title"></div>
                                                    <div class="ui-tile-selector-searcher-inner">
                                                    <div class="ui-tile-selector-searcher-main ui-tile-selector-searcher-inner-shadow">
                                                    <div data-role="popup-item-list" class="ui-tile-selector-searcher-content" style="display: none;"></div>
                                                    <svg data-role="popup-loader" class="ui-tile-selector-searcher-circular" viewBox="25 25 50 50">
                                                    <circle class="ui-tile-selector-searcher-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"/>
                                                    <circle class="ui-tile-selector-searcher-inner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"/>
                                                    </svg>
                                                    </div>
                                                    <div data-role="popup-category-list" class="ui-tile-selector-searcher-sidebar" style="display: none;"></div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </script>

                                                    <span data-role="tile-container" class="ui-tile-selector-selector">
                                                    <span data-role="tile-more" class="ui-tile-selector-more" style="display: none;">
                                                    <span data-role="tile-item-name">...</span>
                                                    </span>
                                                    <input data-role="tile-input" type="text" class="ui-tile-selector-input" autocomplete="off" style="display: none;" id="ACTION[0][ARGUMENTS][data][UF_CRM_TASK][]-action[0][arguments][data][uf-crm-task]cODy3K1706618785-search-input" data-bxchangehandler="Y">

                                                    <span class="ui-tile-selector-select-container">
                                                    <span data-role="tile-select" class="ui-tile-selector-select">
                                                    выбрать									</span>
                                                    </span>
                                                    </span>
                                                    </span>

                                                    </span>		</span>

                                                    </div>
                                                    </div>
                                                ';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div data-bx-id="task-edit-se-parenttask-block-place" data-block-name="SE_PARENTTASK" data-group-id="0" class="task-edit-block-place ">
                                <div data-bx-id="task-edit-se-parenttask-block" data-block-name="SE_PARENTTASK" class="pinable-block task-options-item task-options-item-se-parenttask">
                                    <span data-bx-id="task-edit-chooser" data-target="se-parenttask-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                    <span class="task-options-item-param">Сделать подзадачей</span>
                                    <?= !$arInf["makeSubtask"] ?
                                        '<div class="task-options-item-open-inner">
                                        <span id="bx-component-scope-parenttask-livefeed_task_form" class="task-options-destination-wrap t-empty task-item-set-empty-true t-min task-item-set-min">
                                        <input data-bx-id="task-edit-parent-input" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARENTTASK][ID]" value="" wfd-id="id161">
                                        <span data-bx-id="task-item-set-items">
                                        <script type="text/html" data-bx-id="task-item-set-item">
                                        <span data-bx-id="task-item-set-item" data-item-value="{{VALUE}}" class="task-inline-selector-item {{ITEM_SET_INVISIBLE}}">
                                        <span class="task-options-destination task-options-destination-all-users">
                                        <a href="/company/personal/user/1/tasks/task/view/{{VALUE}}/" target="_blank" class="task-options-destination-text">{{DISPLAY}}</a><span data-bx-id="task-item-set-item-delete" class="task-option-inp-del" title="Удалить"></span>
                                        </span>
                                        </span>
                                        </script>
                                        </span>
                                        <span class="task-inline-selector-item">
                                        <a href="javascript:void(0)" data-bx-id="task-item-set-open-form" class="feed-add-destination-link">
                                        <span class="task-item-set-empty-block-off">+ Добавить</span>
                                        <span class="task-item-set-empty-block-on">Сменить</span>
                                        </a>
                                        </span>
                                        </span>
                                        </div>' : '<div class="task-options-item-open-inner">
                                        <span id="bx-component-scope-parenttask-livefeed_task_form" class="task-options-destination-wrap t-filled t-max task-item-set-max task-item-set-empty-false">
                                        <input data-bx-id="task-edit-parent-input" type="hidden" name="ACTION[0][ARGUMENTS][data][SE_PARENTTASK][ID]" value="2">
                                        <span data-bx-id="task-item-set-items">
                                        <script type="text/html" data-bx-id="task-item-set-item">
                                        <span data-bx-id="task-item-set-item" data-item-value="{{VALUE}}" class="task-inline-selector-item {{ITEM_SET_INVISIBLE}}">
                                        <span class="task-options-destination task-options-destination-all-users">
                                        <a href="/company/personal/user/1/tasks/task/view/{{VALUE}}/" target="_blank" class="task-options-destination-text">{{DISPLAY}}</a><span data-bx-id="task-item-set-item-delete" class="task-option-inp-del" title="Удалить"></span>
                                        </span>
                                        </span>
                                        </script>
                                        <span data-bx-id="task-item-set-item" data-item-value="2" class="task-inline-selector-item" style="">
                                        <span class="task-options-destination task-options-destination-all-users">
                                        <a href="/company/personal/user/1/tasks/task/view/2/" target="_blank" class="task-options-destination-text">' . $arInf["makeSubtask"] . '</a><span data-bx-id="task-item-set-item-delete" class="task-option-inp-del" title="Удалить"></span>
                                        </span>
                                        </span></span>
                                        <span class="task-inline-selector-item">
                                        <a href="javascript:void(0)" data-bx-id="task-item-set-open-form" class="feed-add-destination-link">
                                        <span class="task-item-set-empty-block-off">+ Добавить</span>
                                        <span class="task-item-set-empty-block-on">Сменить</span>
                                        </a>
                                        </span>
                                        </span>
                                        </div>' ?>
                                </div>
                            </div>
                            <div data-bx-id="task-edit-se-tag-block-place" data-block-name="SE_TAG" data-group-id="0" class="task-edit-block-place ">
                                <div data-bx-id="task-edit-se-tag-block" data-block-name="SE_TAG" class="pinable-block task-options-item task-options-item-se-tag">
                                    <span data-bx-id="task-edit-chooser" data-target="se-tag-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                    <span class="task-options-item-param">Теги</span>
                                    <div class="task-options-item-open-inner">
                                        <?php
                                        if ($arInf["tags"]) {
                                            echo '<div id="bx-component-scope-bitrix_tasks_widget_tag_selectorselector_1" class="tasks task-form-field block t-filled tag-sel-empty-false">
                                            <span class="js-id-tag-sel-items tasks-h-invisible">
                                            <script type="text/html" data-bx-id="tag-sel-item">
                                            <span class="js-id-tag-sel-item js-id-tag-sel-item-{{VALUE}} task-form-field-item {{ITEM_SET_INVISIBLE}}" data-item-value="{{VALUE}}">
                                            <span class="task-form-field-item-text" class="task-options-destination-text">
                                            {{DISPLAY}}
                                            </span>
                                            <span class="js-id-tag-sel-item-delete task-form-field-item-delete" title="Отменить выбор"></span>
                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_TAG][{{VALUE}}][NAME]" value="{{DISPLAY}}" />
                                            </span>
                                            </script>';
                                            foreach ($arInf["tags"] as $key => $value) {
                                                echo '<span class="js-id-tag-sel-item js-id-tag-sel-item-49 task-form-field-item" data-item-value="49" style="">
                                                <span class="task-form-field-item-text">' .
                                                    $arInf["tags"][$key]
                                                    . '</span>
                                                <span class="js-id-tag-sel-item-delete task-form-field-item-delete" title="Отменить выбор"></span>
                                                <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_TAG][49][NAME]" value="1">
                                                </span></span>';
                                            }
                                            echo '<span class="task-form-field-controls">
                                            <a href="javascript:void(0);" class="js-id-tag-sel-form-control task-form-field-link add">
                                            <span class="task-form-field-when-filled">Добавить еще</span>
                                            <span class="task-form-field-when-empty">Добавить</span>
                                            </a>
                                            </span>

                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_TAG][]" value="">
                                            </div>';
                                        } else {
                                            echo '<div id="bx-component-scope-bitrix_tasks_widget_tag_selectorselector_1" class="tasks task-form-field block t-empty tag-sel-empty-true t-min tag-sel-min">
                                            <span class="js-id-tag-sel-items tasks-h-invisible">
                                            <script type="text/html" data-bx-id="tag-sel-item">
                                            <span class="js-id-tag-sel-item js-id-tag-sel-item-{{VALUE}} task-form-field-item {{ITEM_SET_INVISIBLE}}" data-item-value="{{VALUE}}">
                                            <span class="task-form-field-item-text" class="task-options-destination-text">
                                            {{DISPLAY}}
                                            </span>
                                            <span class="js-id-tag-sel-item-delete task-form-field-item-delete" title="Отменить выбор"></span>
                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_TAG][{{VALUE}}][NAME]" value="{{DISPLAY}}" />
                                            </span>
                                            </script>
                                            </span>
                                            <span class="task-form-field-controls">
                                            <a href="javascript:void(0);" class="js-id-tag-sel-form-control task-form-field-link add">
                                            <span class="task-form-field-when-filled">Добавить еще</span>
                                            <span class="task-form-field-when-empty">Добавить</span>
                                            </a>
                                            </span>
                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_TAG][]" value="" wfd-id="id162">
                                            </div>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div data-bx-id="task-edit-epic-block-place" data-block-name="EPIC" data-group-id="0" class="task-edit-block-place hidden">
                                <div data-bx-id="task-edit-epic-block" data-block-name="EPIC" class="pinable-block task-options-item task-options-item-epic">
                                    <span data-bx-id="task-edit-chooser" data-target="epic-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                    <span class="task-options-item-param">Эпик</span>
                                    <div class="task-options-item-open-inner">
                                        <div id="tasks-scrum-epic-edit-selector" class="tasks-scrum-epic-selector tasks-scrum-epic-edit-selector"><input type="hidden" name="ACTION[0][ARGUMENTS][data][EPIC]" value="0" wfd-id="id163">
                                            <div class="ui-tag-selector-outer-container">
                                                <div class="ui-tag-selector-container">
                                                    <div class="ui-tag-selector-items"><input type="text" class="ui-tag-selector-item ui-tag-selector-text-box ui-tag-selector-item-hidden" autocomplete="off" placeholder="" value="" wfd-id="id164" style="width: 200px;"><span class="ui-tag-selector-item ui-tag-selector-add-button"><span class="ui-tag-selector-add-button-caption">Добавить</span></span></div>
                                                    <div class="ui-tag-selector-create-button ui-tag-selector-item-hidden"><span class="ui-tag-selector-create-button-caption">Создать</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-bx-id="task-edit-user-fields-block-place" data-block-name="USER_FIELDS" data-group-id="0" class="task-edit-block-place ">
                                <div data-bx-id="task-edit-user-fields-block" data-block-name="USER_FIELDS" class="pinable-block task-options-item task-options-item-user-fields task-options-item-open">
                                    <span data-bx-id="task-edit-chooser" data-target="user-fields-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                    <span class="task-options-item-param">Пользовательские поля</span>
                                    <div class="task-options-item-open-inner">
                                        <div id="bx-component-scope-bitrix_tasks_userfield_panel_1" class="tasks t-empty item-set-empty-true t-min item-set-min">
                                            <div class="tasks-uf-panel">
                                                <a href="javascript:void(0);" class="js-id-uf-panel-action tasks-btn-customize tasks-uf-panel-settings"></a>
                                                <div class="js-id-item-set-items js-id-uf-panel-items tasks-uf-panel-items">
                                                    <div class="tasks-uf-panel-dnd-after panel"></div>
                                                    <script data-bx-id="item-set-item" type="text/html">
                                                        <div class="js-id-item-set-item js-id-item-set-item-{{VALUE}} tasks-uf-panel-row tasks {{DEFACEABLE}} {{REQUIRED}} {{EDIT}} {{INVISIBLE}}" data-type="{{USER_TYPE_ID}}" data-multiple="{{DISPLAY_MULTIPLE}}" data-item-value="{{VALUE}}">
                                                            <div class="tasks-uf-panel-row-geometry">
                                                                <div class="js-id-uf-panel-item-drag tasks-btn-drag"></div>
                                                                <div class="tasks-uf-panel-row-title">
                                                                    <div class="tasks-uf-panel-row-title-text">
                                                                        <span class="tasks-uf-panel-row-title-red-star tasks-red">*</span>
                                                                        <span class="js-id-item-set-item-label">{{DISPLAY}}</span>
                                                                    </div>
                                                                    <div class="tasks-uf-panel-row-title-edit">
                                                                        <input class="js-id-item-set-item-label-edit js-id-uf-panel-item-label-edit" type="text" value="" maxlength="255" />
                                                                    </div>
                                                                </div>
                                                                <div class="tasks-uf-panel-row-data">
                                                                    <div class="tasks-uf-panel-row-data-value">
                                                                        <div class="js-id-item-set-item-field-html">
                                                                            {{{FIELD_HTML}}}
                                                                        </div>
                                                                        <div class="tasks-uf-panel-row-data-value-overlay"></div>
                                                                    </div>
                                                                    <div class="js-id-item-set-item-form-place tasks-uf-panel-row-data-form-place invisible">
                                                                        <div class="js-id-item-set-item-form tasks-uf-panel-form">
                                                                            <div class="tasks-uf-panel-form-flags">
                                                                                <label title="Можно задать только для нового поля"><input class="js-id-item-set-item-multiple-edit" type="checkbox" />Множественное</label>
                                                                                <span class="tasks-btn-restricted" title="Настройка флага обязательности поля доступна только при оплате верхнего тарифного плана.">
                                                                                    <label class="disabled"><input class="js-id-item-set-item-required-edit" type="checkbox" disabled="disabled" />Обязательное</label>
                                                                                </span>
                                                                            </div>
                                                                            <div class="tasks-uf-panel-form-buttons">
                                                                                <button type="button" class="js-id-item-set-item-save ui-btn">Сохранить</button>
                                                                                <a class="js-id-item-set-item-cancel ui-btn ui-btn-link" href="javascript:void(0);">Отмена</a>
                                                                            </div>
                                                                            <div class="js-id-item-set-item-error task-message-label error invisible">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tasks-uf-panel-row-buttons">
                                                                    <a href="javascript:void(0);" class="js-id-item-set-item-hide tasks-btn-delete tasks-uf-panel-row-button-delete" title="Скрыть поле"></a>
                                                                    <a href="javascript:void(0);" class="js-id-item-set-item-edit tasks-btn-edit tasks-uf-panel-row-button-edit" title="Редактировать поле"></a>
                                                                </div>
                                                                <div class="tasks-uf-panel-dnd-after"></div>
                                                            </div>
                                                        </div>
                                                    </script>
                                                    <script data-bx-id="uf-panel-item-flying" type="text/html">
                                                        <div class="tasks-uf-panel tasks flying">
                                                            <div class="tasks-uf-panel-row">
                                                                <div class="tasks-uf-panel-row-geometry">
                                                                    <div class="tasks-btn-drag"></div>
                                                                    <div class="tasks-uf-panel-row-title">
                                                                        <div class="tasks-uf-panel-row-title-text">
                                                                            {{LABEL}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </script>
                                                    <script data-bx-id="item-set-item-field-stub" type="text/html">
                                                        <input class="tasks-uf-panel-row-data-field-stub" type="text" data-type="string double datetime" />
                                                        <label class="tasks-uf-panel-row-data-field-stub fields" data-type="boolean">
                                                            <input type="checkbox" />
                                                        </label>
                                                    </script>
                                                </div>
                                                <div class="tasks-uf-panel-new-item-place js-id-item-set-new-item-place js-id-uf-panel-new-item-place">
                                                </div>
                                                <div class="tasks-uf-panel-bottom-actions">
                                                    <span>
                                                        <a class="tasks-uf-panel-btn-action js-id-uf-panel-add-field" href="javascript:void(0);">
                                                            Добавить поле </a>
                                                    </span>
                                                    <a class="js-id-uf-panel-un-hide-field invisible" href="javascript:void(0);">Показать поле</a>
                                                </div>
                                                <div class="js-id-uf-panel-un-hide-menu no-display">
                                                    <div class="js-id-scrollpane-pane menu-popup tasks-uf-panel-scrollpane tasks-scrollpane">
                                                        <div class="js-id-scrollpane-body js-id-uf-panel-uhmenu menu-popup-items tasks-scrollpane-body">
                                                            <script data-bx-id="uf-panel-menu-item" type="text/html">
                                                                <span title="{{LABEL_EXT}}" data-id="{{ID}}" class="js-id-scrollpane-item menu-popup-item menu-popup-no-icon">
                                                                    <span class="menu-popup-item-text">
                                                                        <span class="tasks-red {{STAR_INVISIBLE}}">*</span>&nbsp;{{LABEL}}
                                                                    </span>
                                                                </span>
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-bx-id="task-edit-se-relatedtask-block-place" data-block-name="SE_RELATEDTASK" data-group-id="0" class="task-edit-block-place ">
                                <div data-bx-id="task-edit-se-relatedtask-block" data-block-name="SE_RELATEDTASK" class="pinable-block task-options-item task-options-item-se-relatedtask">
                                    <span data-bx-id="task-edit-chooser" data-target="se-relatedtask-block" class="task-option-fixedbtn" title="Включить/выключить постоянное отображение блока"></span>
                                    <span class="task-options-item-param">Связанные задачи</span>
                                    <?php
                                    if ($arInf["relatedTasks"]) {
                                        echo '
                                            <div class="task-options-item-open-inner">

                                            <span id="bx-component-scope-dependson-livefeed_task_form" class="task-options-destination-wrap t-filled task-item-set-empty-false">

                                            <span data-bx-id="task-item-set-items">
                                            <script type="text/html" data-bx-id="task-item-set-item">

                                            <span data-bx-id="task-item-set-item" data-item-value="{{VALUE}}" class="task-inline-selector-item {{ITEM_SET_INVISIBLE}}">
                                            <span class="task-options-destination task-options-destination-all-users">
                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RELATEDTASK][{{VALUE}}][ID]" value="{{VALUE}}">
                                            <a href="/company/personal/user/1/tasks/task/view/{{VALUE}}/" target="_blank" class="task-options-destination-text">{{DISPLAY}}</a>
                                            <span data-bx-id="task-item-set-item-delete" class="task-option-inp-del" title="Удалить"></span>
                                            </span>
                                            </span>
                                            </script>';
                                        foreach ($arInf["relatedTasks"] as $key => $value) {
                                            echo '<span data-bx-id="task-item-set-item" data-item-value="2" class="task-inline-selector-item" style="">
                                                <span class="task-options-destination task-options-destination-all-users">
                                                <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RELATEDTASK][2][ID]" value="2">
                                                <a href="/company/personal/user/1/tasks/task/view/2/" target="_blank" class="task-options-destination-text">' . $arInf["relatedTasks"][$key] . '</a>
                                                <span data-bx-id="task-item-set-item-delete" class="task-option-inp-del" title="Удалить"></span>
                                                </span>
                                                </span>';
                                        }
                                        echo '</span><span class="task-inline-selector-item">
                                            <a href="javascript:void(0)" data-bx-id="task-item-set-open-form" class="feed-add-destination-link">
                                            <span class="task-item-set-empty-block-off">+ Добавить</span>
                                            <span class="task-item-set-empty-block-on">+ Добавить еще</span>
                                            </a>
                                            </span>
                                            <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RELATEDTASK][]" value="">
                                            </span>
                                            </div>
                                            ';
                                    } else {
                                        echo '
                                        <div class="task-options-item-open-inner">
                                        <span id="bx-component-scope-dependson-livefeed_task_form" class="task-options-destination-wrap t-empty task-item-set-empty-true t-min task-item-set-min">
                                        <span data-bx-id="task-item-set-items">
                                        <script type="text/html" data-bx-id="task-item-set-item">
                                        <span data-bx-id="task-item-set-item" data-item-value="{{VALUE}}" class="task-inline-selector-item {{ITEM_SET_INVISIBLE}}">
                                        <span class="task-options-destination task-options-destination-all-users">
                                        <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RELATEDTASK][{{VALUE}}][ID]" value="{{VALUE}}">
                                        <a href="/company/personal/user/1/tasks/task/view/{{VALUE}}/" target="_blank" class="task-options-destination-text">{{DISPLAY}}</a>
                                        <span data-bx-id="task-item-set-item-delete" class="task-option-inp-del" title="Удалить"></span>
                                        </span>
                                        </span>
                                        </script>
                                        </span>
                                        <span class="task-inline-selector-item">
                                        <a href="javascript:void(0)" data-bx-id="task-item-set-open-form" class="feed-add-destination-link">
                                        <span class="task-item-set-empty-block-off">+ Добавить</span>
                                        <span class="task-item-set-empty-block-on">+ Добавить еще</span>
                                        </a>
                                        </span>
                                        <div data-bx-id="task-item-set-picker-content" class="hidden-soft">
                                        <div class="finder-box finder-box-multiple" id="dependson_selector_content">
                                        <table class="finder-box-layout">
                                        <tbody>
                                        <tr>
                                        <td class="finder-box-left-column">
                                        <div class="finder-box-search">
                                        <input class="finder-box-search-textbox" name="dependson_task_input" id="dependson_task_input" wfd-id="id165">
                                        </div>
                                        <div class="finder-box-tabs">
                                        <span class="finder-box-tab finder-box-tab-selected" id="dependson_tab_last" onclick="O_dependson.displayTab(&#39;last&#39;);">
                                        <span class="finder-box-tab-left"></span>
                                        <span class="finder-box-tab-text">Последние</span>
                                        <span class="finder-box-tab-right"></span>
                                        </span>
                                        <span class="finder-box-tab" id="dependson_tab_search" onclick="O_dependson.displayTab(&#39;search&#39;);">
                                        <span class="finder-box-tab-left"></span>
                                        <span class="finder-box-tab-text">Поиск</span>
                                        <span class="finder-box-tab-right"></span>
                                        </span>
                                        </div>
                                        <div class="popup-window-hr popup-window-buttons-hr"><i></i></div>
                                        <div class="finder-box-tabs-content">
                                        <div class="finder-box-tab-content finder-box-tab-content-selected" id="dependson_last">
                                        <table class="finder-box-tab-columns">
                                        <tbody>
                                        <tr>
                                        <td>
                                            <div class="finder-box-item" id="dependson_last_task_2" onclick="O_dependson.select(event)">
                                                <input class="tasks-hidden-input" type="checkbox" name="dependson[]" value="2" wfd-id="id166">
                                                <div class="finder-box-item-text">Скачать приложение Битрикс24 [2]</div>
                                                <div class="finder-box-item-icon"></div>
                                            </div>
                                        </td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="finder-box-tab-content" id="dependson_search"></div>
                                        </div>
                                        </td>
                                        <td class="finder-box-right-column" id="dependson_selected_tasks">
                                        <div class="finder-box-selected-title">
                                        Выбранные (
                                        <span id="dependson_current_count">0</span>
                                        )
                                        </div>
                                        <div class="finder-box-selected-items">
                                        </div>
                                        </td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        </div>
                                        <input type="hidden" name="ACTION[0][ARGUMENTS][data][SE_RELATEDTASK][]" value="" wfd-id="id167">
                                        </span>
                                        </div>
                                        ';
                                    } ?>
                                </div>
                            </div>
                            <div data-bx-id="task-edit-se-require-result-block-place" data-block-name="SE_REQUIRE_RESULT" data-group-id="0" class="task-edit-block-place ">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="ACTION[1][OPERATION]" value="taskstaskcomponent.setstate" wfd-id="id168">
                    <div data-bx-id="task-edit-state" class="task-edit-state-fixed"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_CHECKLIST][C]" value="0" wfd-id="id169"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_ORIGINATOR][C]" value="0" wfd-id="id170"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_AUDITOR][C]" value="0" wfd-id="id171"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_ACCOMPLICE][C]" value="0" wfd-id="id172"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][DATE_PLAN][C]" value="0" wfd-id="id173"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][OPTIONS][C]" value="0" wfd-id="id174"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_PROJECT][C]" value="0" wfd-id="id175"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][TIMEMAN][C]" value="0" wfd-id="id176"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_REMINDER][C]" value="0" wfd-id="id177"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_TEMPLATE][C]" value="0" wfd-id="id178"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_PROJECTDEPENDENCE][C]" value="0" wfd-id="id179"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][UF_CRM_TASK][C]" value="0" wfd-id="id180"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_PARENTTASK][C]" value="0" wfd-id="id181"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_TAG][C]" value="0" wfd-id="id182"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][EPIC][C]" value="0" wfd-id="id183"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][USER_FIELDS][C]" value="0" wfd-id="id184"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_RELATEDTASK][C]" value="0" wfd-id="id185"><input type="hidden" name="ACTION[1][ARGUMENTS][state][BLOCKS][SE_REQUIRE_RESULT][C]" value="1" wfd-id="id186"><input type="hidden" name="ACTION[1][ARGUMENTS][state][FLAGS][ALLOW_TIME_TRACKING]" value="0" wfd-id="id187"><input type="hidden" name="ACTION[1][ARGUMENTS][state][FLAGS][TASK_CONTROL]" value="0" wfd-id="id188"><input type="hidden" name="ACTION[1][ARGUMENTS][state][FLAGS][ALLOW_CHANGE_DEADLINE]" value="1" wfd-id="id189"><input type="hidden" name="ACTION[1][ARGUMENTS][state][FLAGS][MATCH_WORK_TIME]" value="0" wfd-id="id190"><input type="hidden" name="ACTION[1][ARGUMENTS][state][FLAGS][FORM_FOOTER_PIN]" value="0" wfd-id="id191"><input type="hidden" name="ACTION[1][ARGUMENTS][state][FLAGS][REQUIRE_RESULT]" value="0" wfd-id="id192"><input type="hidden" name="ACTION[1][ARGUMENTS][state][FLAGS][TASK_PARAM_3]" value="0" wfd-id="id193"></div>
                </div>
            </div>
        </div>
        <div class="feed-buttons-block" id="feed-add-buttons-blockblogPostForm"><span class="ui-btn ui-btn-lg ui-btn-primary" id="blog-submit-button-save">Отправить</span><span class="ui-btn ui-btn-lg ui-btn-link" id="blog-submit-button-cancel">Отменить</span></div>
    </body>

    </html>
<?php
} else {
    echo "Неверный адрес!";
}
?>