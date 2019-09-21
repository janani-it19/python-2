#include<stdio.h>
void main()
{
int a,i;
printf("enter n value:");
scanf("%d",&a);
for(i=1;i<=a;i++)
{
if(a%i==0)
{
printf("the factors of %d is %d\n",a,i);
}
}
}
