$('#select').on('change', function() {
    $.ajax({
        type: "GET",
        url: APP + "/getinformList",
        data: {
            type: $(this).val()
        },
        success: function(data) {
            console.log(data);
            $("#table_list_2").jqGrid('clearGridData'); //清空表格
            $("#table_list_2").jqGrid('setGridParam', { // 重新加载数据
                datatype: 'local',
                data: data, //  newdata 是符合格式要求的需要重新加载的数据 
                page: 1,
            }).trigger("reloadGrid");
        },
        error: errorfun
    });
});
$.ajax({
    type: "GET",
    url: APP + "/getinformList",
    data: {
        type:'0'
    },
    success: successget,
    error: errorfun
});

function errorfun() {
    alert('获取数据失败');
}

function successget(data) {
    $.jgrid.defaults.styleUI = 'Bootstrap';
    console.log(data);
    // var mydata = data.parse();
    // Configuration for jqGrid Example 2
    $("#table_list_2").jqGrid({
        editurl: APP + "/updateinform", //提交id值
        data: data,
        datatype: 'local',
        height: 450,
        autowidth: true,
        shrinkToFit: true,
        rowNum: 15,
        rowList: [10, 20, 30],
        colNames: ['序号', '标题', '来源', '作者', '时间', '类型'],
        colModel: [{
            name: 'id',
            index: 'id',
            editable: true,
            width: 20,
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
            name: 'type',
            index: 'type',
            editable: true,
            width: 100
        }, {
            name: 'time',
            index: 'time',
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
        hidegrid: false
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

    //    Add responsive to jqGrid
    $(window).bind('resize', function() {
        var width = $('.jqGrid_wrapper').width();
        $('#table_list_2').setGridWidth(width);
    });

}
