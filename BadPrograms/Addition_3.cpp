//feel like using marcos is cheating but hey...its unreadable 
//while also being readable...and defenitly horrid
#include <iostream>
#define _ADD ;ADD
#define __ADD ADD.sum
typedef int SUPER_COOL_INT;
#define boop ;
#define show ;std::cout
#define gimmy ;std::cin
#define program main(){
#define done ;return 0;}
class add{
	public:
	SUPER_COOL_INT sum;
	add():sum(0){}
	void operator>(SUPER_COOL_INT A){
		sum +=A;
	}
};
//wanted to write <ADD> but compiler threw a hissy fit so _ADD> it is   :/
SUPER_COOL_INT program
	add ADD boop
	SUPER_COOL_INT a=1, b=2, c=32
  show << "Enter Three Whole Numbers for the program to add for you!\n"
  gimmy >> a >> b >> c
	_ADD> a _ADD> b _ADD> c
	show << __ADD
done
