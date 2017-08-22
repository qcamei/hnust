$('#select').on('change', function() {
    $("#table_list_2").jqGrid('setGridParam', {
        url: APP + "/getinformList",
        postData: { 'type': $(this).val() }, //发送数据
        page: 1
    }).trigger("reloadGrid"); //重新载入
});

function init() {
    $.jgrid.defaults.styleUI = 'Bootstrap';
    // Configuration for jqGrid Example 2
    $("#table_list_2").jqGrid({
        url: APP + "/getinformList",
        type: 'get',
        editurl: APP + "/deleteinform", //提交id值
        // data: data['filelist'],
        datatype: 'json',
        jsonReader: {
            root: "datalist",
            page: "currpage",
            total: "total", //   很重要 定义了 后台分页参数的名字。
            records: "totalCount",
            repeatitems: false,
            id: "id"
        },
        height: 450,
        autowidth: true,
        shrinkToFit: true,
        rowNum: 15,
        rowList: [10, 20, 30],
        colNames: ['序号', '标题', '来源', '作者', '时间', '类型', 'id'],
        colModel: [{
            name: 'index',
            index: 'index',
            editable: true,
            width: 50,
            sorttype: "int",
            search: true
        }, {
            name: 'title',
            index: 'title',
            editable: true,
            width: 130,
            sorttype: "text",
            formatter: "text"
        }, {
            name: 'source',
            index: 'source',
            editable: true,
            width: 100
        }, {
            name: 'author',
            index: 'author',
            editable: true,
            width: 100
        }, {
            name: 'time',
            index: 'time',
            editable: true,
            width: 100
        }, {
            name: 'type',
            index: 'type',
            editable: true,
            width: 80,
            sorttype: "data"
        }, {
            name: 'id',
            index: 'id',
            editable: true,
            width: 80,
            sorttype: "data"
        }, ],
        pager: "#pager_list_2",
        viewrecords: true,
        caption: "公告通知管理",
        add: false,
        edit: false,
        del: true,
        addtext: 'Add',
        edittext: 'Edit',
        hidegrid: false,
    });

    // Add selection
    $("#table_list_2").setSelection(4, true);


    // Setup buttons
    $("#table_list_2").jqGrid('navGrid', '#pager_list_2', {
        edit: false,
        add: false,
        del: true,
        search: true
    }, {
        height: 200,
        reloadAfterSubmit: true
    });
    $('#table_list_2').navButtonAdd('#pager_list_2', {
        caption: "编辑",
        onClickButton: function() {
            var id = $('#table_list_2').jqGrid('getGridParam', 'selrow');
            console.log(id);
            window.location.href = APP + "/updateNews?id=" + id;
        },
        position: "first"
    });
    //    Add responsive to jqGrid
    $(window).bind('resize', function() {
        var width = $('.jqGrid_wrapper').width();
        $('#table_list_2').setGridWidth(width);
    });

}

$(function(){
    init();
});
