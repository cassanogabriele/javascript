      var age = parseInt(prompt('Quel est votre \342ge ?'));         
        
        if (age <= 0) 
		{         
            alert("C'est impossible!");
        
        } 
			else if (1 <= age && age < 18) 
			{        
				alert("Vous n'\352tes pas encore majeur.");        
			} 
				else if (18 <= age && age < 50)
				{        
					alert('Vous \352tes majeur mais pas encore senior.');        
				} 
					else if (50 <= age && age < 60) 
					{
        				alert('Vous \352tes senior mais pas encore retrait\351.');        
					}
						else if (60 <= age && age <= 120) 
						{
        					alert('Vous \352tes retrait\351, profitez de votre temps libre !');        
						}
							else if (age > 120)
							{ 
        						alert("C'est impossible!");        
							} 
								else 
								{         
									alert("Vous n'avez pas entr\351 d'\342ge !");        
								}