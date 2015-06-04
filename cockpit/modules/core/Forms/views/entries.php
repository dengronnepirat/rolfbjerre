@start('header')

    {{ $app->assets(['forms:assets/forms.js','forms:assets/js/entries.js'], $app['cockpit/version']) }}

    <style>
        td .uk-grid+.uk-grid { margin-top: 5px; }
    </style>

    <script>
        var FORMDATA = {{ json_encode($form) }};
    </script>

@end('header')


<div data-ng-controller="entries" ng-cloak>

    <nav class="uk-navbar uk-margin-bottom">
        <span class="uk-navbar-brand"><a href="@route("/forms")">@lang('Forms')</a> / {{ $form['name'] }}</span>
        @hasaccess?("Forms", 'manage.forms')
        <ul class="uk-navbar-nav">
            <li><a href="@route('/forms/form/'.$form["_id"])" title="@lang('Edit form')" data-uk-tooltip="{pos:'bottom'}"><i class="uk-icon-pencil"></i></a></li>
            <li><a class="uk-text-danger" ng-click="emptytable()" title="@lang('Empty table')" data-uk-tooltip="{pos:'bottom'}"><i class="uk-icon-trash-o"></i></a></li>
        </ul>
        @end

        <div class="uk-navbar-flip">
            @hasaccess?("Forms", 'manage.forms')
            <div class="uk-navbar-content" data-ng-show="entries && entries.length">
                <a class="uk-button" href="@route('/api/forms/export/'.$form['_id'])" download="{{ $form['name'] }}.json" title="@lang('Export data')" data-uk-tooltip="{pos:'bottom'}">
                    <i class="uk-icon-share-alt"></i>
                </a>
            </div>
            @end
        </div>
    </nav>

    <div class="app-panel uk-margin uk-text-center" data-ng-show="entries && !entries.length">
        <h2><i class="uk-icon-inbox"></i></h2>
        <p class="uk-text-large">
            @lang('It seems you don\'t have any form entries.')
        </p>
    </div>

    <div class="uk-grid" data-uk-grid-margin data-ng-show="entries && entries.length">

        <div class="uk-width-medium-1-1">
            <div class="app-panel">
                <table class="uk-table uk-table-striped" multiple-select="{model:entries}">
                    <thead>
                        <tr>
                            <th width="10"><input class="js-select-all" type="checkbox"></th>
                            <th>
                                @lang('Form data')
                            </th>
                            <th width="20%">@lang('Created')</th>
                            <th width="5%">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="js-multiple-select" data-ng-repeat="entry in entries track by entry._id">
                            <td><input class="js-select" type="checkbox"></td>
                            <td>
                                <div class="uk-grid uk-grid-preserve uk-text-small" data-ng-repeat="(key, value) in entry.data">
                                    <div class="uk-width-medium-1-5">
                                        <strong>@@ key @@</strong>
                                    </div>
                                    <div class="uk-width-medium-4-5">
                                        @@ value @@
                                    </div>
                                </div>
                            </td>
                            <td>@@ entry.created | fmtdate:'d M, Y H:i' @@</td>
                            <td class="uk-text-right">
                                <a href="#" data-ng-click="remove($index, entry._id)" title="@lang('Delete entry')"><i class="uk-icon-trash-o"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="uk-margin-top">
                    <button class="uk-button uk-button-primary" data-ng-click="loadmore()" data-ng-show="entries && !nomore">@lang('Load more...')</button>
                    <button class="uk-button uk-button-danger" data-ng-click="removeSelected()" data-ng-show="selected"><i class="uk-icon-trash-o"></i> @lang('Delete entries')</button>
                </div>

            </div>
        </div>
    </div>
</div>