#include<stdio.h>
void main()
{
int i,n,sum=0;
printf("enter n value:");
scanf("%d",&n);
for(i=1;i<=n;i++)
{
printf("%d\n",i);
sum+=i;
}
printf("the sum is %d",sum);
}


