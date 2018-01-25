/**切换**/
			aBtn=document.getElementsByClassName("user_navli");
			aDiv=document.getElementsByClassName("user_navmain");
			for(i=0;i<aBtn.length;i++)
			{
				aBtn[i].index=i;
				aBtn[i].onclick=function()
				{
					for(var i=0;i<aBtn.length;i++)
					{
						aBtn[i].className='user_navli';
						aDiv[i].style.display='none';
					}
					this.className='user_navli active';
					aDiv[this.index].style.display='block';
				}
				
			}	


/**切换**/
			oBtn=document.getElementsByClassName("userImgTabLi");
			oDiv=document.getElementsByClassName("userImgBoxLi");
			for(i=0;i<oBtn.length;i++)
			{
				oBtn[i].index=i;
				oBtn[i].onclick=function()
				{
					for(var i=0;i<oBtn.length;i++)
					{
						oBtn[i].className=' userImgTabLi column-1_3';
						oDiv[i].style.display='none';
					}
					this.className='userImgTabLi column-1_3 active';
					oDiv[this.index].style.display='block';
				}
				
			}	


