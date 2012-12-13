var HomeUI = {
    
    /*
     * GENERAL
     */
    init:function(){
        HomeUI.initWaterMark();
        HomeUI.initContactList();
    },
    
    initWaterMark:function()
    {
        $('#tbSearch').watermark('Search site');
    },
    
    
    
    /*
     * CURRENT PROJECT ONLY
     */
    timerContactList:null,
    initContactList:function()
    {
        $('#btnContact').mouseover(function(){
            clearTimeout(HomeUI.timerContactList);
            $('#contact-list').show();        
        });  
        
        $('#btnContact').mouseout(function(){
            clearTimeout(HomeUI.timerContactList);
            HomeUI.timerContactList = setTimeout(function(){
                $('#contact-list').hide();
            },1000);
        });
        
        $('#contact-list').mouseover(function(){
            clearTimeout(HomeUI.timerContactList); 
            $('#contact-list').show();
        }); 
        
        $('#contact-list').mouseout(function(){
            $('#contact-list').hide(); 
        }); 
    },
    
    
    
    isContactListHidden:1,
    toggleContactList:function()
    {
        if (HomeUI.isContactListHidden==1)
        {
            $('#contact-list').show();
            HomeUI.isContactListHidden=0;
        }
        else
        {
            $('#contact-list').hide();
            HomeUI.isContactListHidden=1;
        }
    }  
    
    
};