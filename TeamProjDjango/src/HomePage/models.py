# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey has `on_delete` set to the desired behavior.
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from __future__ import unicode_literals

from django.db import models



class Frboard(models.Model):
    no      = models.FloatField(primary_key=True, serialize=False)
    title   = models.CharField(max_length=100, blank=True, null=True)
    content = models.CharField(max_length=3000, blank=True, null=True)
    id      = models.ForeignKey('Buser', models.DO_NOTHING, db_column='id', blank=True, null=True)
    xdate   = models.DateField(blank=True, null=True,auto_now_add=True)

    class Meta:
        managed  = False
        db_table = 'frboard'


class Ssboard(models.Model):
    no      = models.FloatField(primary_key=True, serialize=False)
    title   = models.CharField(max_length=100, blank=True, null=True)
    content = models.CharField(max_length=3000, blank=True, null=True)
    id      = models.ForeignKey('Buser', models.DO_NOTHING, db_column='id', blank=True, null=True)
    xdate   = models.DateField(blank=True, null=True,auto_now_add=True)

    class Meta:
        managed  = False
        db_table = 'ssboard'
        
        
        
class Oopboard(models.Model):
    no      = models.FloatField(primary_key=True, serialize=False)
    title   = models.CharField(max_length=100, blank=True, null=True)
    content = models.CharField(max_length=3000, blank=True, null=True)
    id      = models.ForeignKey('Buser', models.DO_NOTHING, db_column='id', blank=True, null=True)
    xdate   = models.DateField(blank=True, null=True,auto_now_add=True)

    class Meta:
        managed  = False
        db_table = 'oopboard'


class Daboard(models.Model):
    no      = models.FloatField(primary_key=True, serialize=False)
    title   = models.CharField(max_length=100, blank=True, null=True)
    content = models.CharField(max_length=3000, blank=True, null=True)
    id      = models.ForeignKey('Buser', models.DO_NOTHING, db_column='id', blank=True, null=True)
    xdate   = models.DateField(blank=True, null=True,auto_now_add=True)

    class Meta:
        managed  = False
        db_table = 'daboard'


class Dbmsboard(models.Model):
    no      = models.FloatField(primary_key=True, serialize=False)
    title   = models.CharField(max_length=100, blank=True, null=True)
    content = models.CharField(max_length=3000, blank=True, null=True)
    id      = models.ForeignKey('Buser', models.DO_NOTHING, db_column='id', blank=True, null=True)
    xdate   = models.DateField(blank=True, null=True,auto_now_add=True)

    class Meta:
        managed  = False
        db_table = 'dbmsboard'

class Board(models.Model):
    no      = models.FloatField(primary_key=True, serialize=False)
    title   = models.CharField(max_length=100, blank=True, null=True)
    content = models.CharField(max_length=3000, blank=True, null=True)
    id      = models.ForeignKey('Buser', models.DO_NOTHING, db_column='id', blank=True, null=True)
    xdate   = models.DateField(blank=True, null=True,auto_now_add=True)

    class Meta:
        managed  = False
        db_table = 'board'

class Buser(models.Model):
    id      = models.CharField(primary_key=True, max_length=50)
    pw      = models.CharField(max_length=150, blank=True, null=True)
    name    = models.CharField(max_length=80, blank=True, null=True)
    phone   = models.CharField(max_length=13, blank=True, null=True)
    xdate   = models.DateField(blank=True, null=True,auto_now_add=True)

    class Meta:
        managed  = False
        db_table = 'buser'
