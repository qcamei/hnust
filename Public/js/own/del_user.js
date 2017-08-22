$.ajax({
    type: "GET",
    url: APP + '/getusersList',
    success: successget,
    error: errorfun
});

function errorfun() {
    alert('获取数据失败');
}
// Examle data for jqGrid
function successget(data) {
    // var mydata = data.parse();
    //追加序列号
    console.log(data);
    // data.map(function(e, index) {
    //     return e['index'] = index + 1;
    // });
    $.jgrid.defaults.styleUI = 'Bootstrap';
    $("#table_list_2").jqGrid({
        editurl: APP+'/deleteuser',
        data: data,
        datatype: "local",
        height: 450,
        autowidth: true,
        shrinkToFit: true,
        rowNum: 15,
        rowList: [10, 20, 30],
        colNames: ['序号', '用户名', '密码', '昵称', '权限'],
        colModel: [{
                name: 'id',
                index: 'id',
                editable: true,
                width: 40,
                sorttype: "int",
                search: true
            }, {
                name: 'username',
                index: 'username',
                editable: true,
                width: 200
            }, {
                name: 'password',
                index: 'password',
                editable: true,
                width: 200
            }, {
                name: 'nickname',
                index: 'nickname',
                editable: true,
                width: 20
            }, {
                name: 'authority',
                index: 'authority',
                editable: true,
                width: 20
            }

        ],
        pager: "#pager_list_2",
        viewrecords: true,
        caption: "删除用户——管理员最高权限",
        add: false,
        edit: true,
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

}

// Add responsive to jqGrid
$(window).bind('resize', function() {
    var width = $('.jqGrid_wrapper').width();
    $('#table_list_2').setGridWidth(width);
});
