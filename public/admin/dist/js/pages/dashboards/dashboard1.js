/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/

var base_url =  window.location.origin == "http://localhost" ? window.location.origin + "/EnwiStore" : window.location.origin

var dataMoney = []

$(function() {
    "use strict";
    // ============================================================== 
    // Newsletter
    // ============================================================== 
    $.get(base_url + "/admin/doanh-thu/", function(result){
        dataMoney = result.slice(1,result.length - 1).split(",")

        var max = Math.max(...dataMoney);

        console.log(dataMoney)

        var chart = new Chartist.Line('.campaign', {
            labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"],
            series: [
                dataMoney,
            ]
        }, {
            low: 0,
            high: max,
            showArea: true,
            fullWidth: true,
            plugins: [
                Chartist.plugins.tooltip()
            ],
            axisY: {
                onlyInteger: true,
                scaleMinSpace: 40,
                // offset: 20,
                labelInterpolationFnc: function(max) {
                    return (max / 1000) + 'k';
                }
            },

        });

        // Offset x1 a tiny amount so that the straight stroke gets a bounding box
        // Straight lines don't get a bounding box 
        // Last remark on -> http://www.w3.org/TR/SVG11/coords.html#ObjectBoundingBox
        chart.on('draw', function(ctx) {
            if (ctx.type === 'area') {
                ctx.element.attr({
                    x1: ctx.x1 + 0.001
                });
            }
        });

        // Create the gradient definition on created event (always after chart re-render)
        chart.on('created', function(ctx) {
            var defs = ctx.svg.elem('defs');
            defs.elem('linearGradient', {
                id: 'gradient',
                x1: 0,
                y1: 1,
                x2: 0,
                y2: 0
            }).elem('stop', {
                offset: 0,
                'stop-color': 'rgba(255, 255, 255, 1)'
            }).parent().elem('stop', {
                offset: 1,
                'stop-color': 'rgba(64, 196, 255, 1)'
            });
        });


        var chart = [chart];
    });
});