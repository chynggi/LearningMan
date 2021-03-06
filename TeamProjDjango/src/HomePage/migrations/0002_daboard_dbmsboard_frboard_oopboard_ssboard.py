# Generated by Django 2.2.5 on 2019-11-21 00:36

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('HomePage', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Daboard',
            fields=[
                ('no', models.FloatField(primary_key=True, serialize=False)),
                ('title', models.CharField(blank=True, max_length=100, null=True)),
                ('contens', models.CharField(blank=True, max_length=3000, null=True)),
                ('xdate', models.DateField(blank=True, null=True)),
            ],
            options={
                'db_table': 'daboard',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Dbmsboard',
            fields=[
                ('no', models.FloatField(primary_key=True, serialize=False)),
                ('title', models.CharField(blank=True, max_length=100, null=True)),
                ('contens', models.CharField(blank=True, max_length=3000, null=True)),
                ('xdate', models.DateField(blank=True, null=True)),
            ],
            options={
                'db_table': 'dbmsboard',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Frboard',
            fields=[
                ('no', models.FloatField(primary_key=True, serialize=False)),
                ('title', models.CharField(blank=True, max_length=100, null=True)),
                ('contens', models.CharField(blank=True, max_length=3000, null=True)),
                ('xdate', models.DateField(blank=True, null=True)),
            ],
            options={
                'db_table': 'frboard',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Oopboard',
            fields=[
                ('no', models.FloatField(primary_key=True, serialize=False)),
                ('title', models.CharField(blank=True, max_length=100, null=True)),
                ('contens', models.CharField(blank=True, max_length=3000, null=True)),
                ('xdate', models.DateField(blank=True, null=True)),
            ],
            options={
                'db_table': 'oopboard',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Ssboard',
            fields=[
                ('no', models.FloatField(primary_key=True, serialize=False)),
                ('title', models.CharField(blank=True, max_length=100, null=True)),
                ('contens', models.CharField(blank=True, max_length=3000, null=True)),
                ('xdate', models.DateField(blank=True, null=True)),
            ],
            options={
                'db_table': 'ssboard',
                'managed': False,
            },
        ),
    ]
