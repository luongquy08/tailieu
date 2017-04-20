﻿/**
 * Created by Admin on 3/14/2016.
 */

$(document).ready(function() {
    var content = $('#ktth-content');
    content.find('.class-choose').on('click', '.dropdown-menu > li > a', function (e) {
        e.preventDefault();
        var self = $(this);
        var classValue = self.data('value');
        var classSelect = $('#menuschool_class');
        classSelect.val(classValue).change();
        self.parents('.dropdown').find('button .text').text(self.text());
    });

    content.find('.subject-choose').on('click', '.dropdown-menu > li > a', function (e) {
        e.preventDefault();
        var self = $(this);
        var classValue = self.data('value');
        var classSelect = $('#menusubject');
        classSelect.val(classValue).change();
        self.parents('.dropdown').find('button .text').text(self.text());
    });
});
