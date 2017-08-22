$.ajax({
    type:"GET",
    url:APP+"/getfilelist",
    success:successget,
    error:errorfun
});
function errorfun(){
    alert('获取数据失败');
}
function successget(data){
     $.jgrid.defaults.styleUI = 'Bootstrap';
     // var mydata = data.parse();
        // Configuration for jqGrid Example 2
       console.log(data);
    $("#table_list_2").jqGrid({
        editurl:APP+"/updatefile",//提交id值
        data: data,
        height: 450,
        autowidth: true,
        shrinkToFit: true,
        rowNum: 15,
        rowList: [10, 20, 30],
        colNames: ['序号', '文件名', '分类', '作者', '来源', '时间'],
        colModel: [
            {
                name: 'id',
                index: 'id',
                editable: true,
                width: 20,
                sorttype: "int",
                search: true
            },
            {
                name: 'filename',
                index: 'filename',
                editable: true,
                width: 130,
            },
            {
                name: 'Type',
                index: 'Type',
                editable: true,
                width: 100
            },
            {
                name: 'author',
                index: 'author',
                editable: true,
                width: 80,
                align: "right",
                sorttype: "float",
            },
            {
                name: 'source',
                index: 'source',
                editable: true,
                width: 80,
                align: "right",
                sorttype: "float"
            },
            {
                name: 'Time',
                index: 'Time',
                editable: true,
                width: 80,
                align: "right",
                sorttype: "float"
            },
        ],
        pager: "#pager_list_2",
        viewrecords: true,
        caption: "文件列表",
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
    $(window).bind('resize', function () {
        var width = $('.jqGrid_wrapper').width();
        $('#table_list_2').setGridWidth(width);
    });

}  

